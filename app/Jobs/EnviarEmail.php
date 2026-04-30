<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Cache;
use App\Models\EbookModel;
use App\Models\Favorito;
use Illuminate\Support\Facades\DB;

class RenovaCache implements ShouldQueue
{
    use Queueable;

    protected $user_id;

    public function __construct($user)
    {
        $this->user_id = $user->id;
    }

    public function handle(): void
    {
        $user_id = $this->user_id;

        // =========================
        // DASHBOARD (FOREVER)
        // =========================
        Cache::forget('dashboard_'.$user_id);

        Cache::rememberForever('dashboard_'.$user_id, function () use ($user_id) {

            $data = [];

            $data['totalEbook'] = EbookModel::where('user_id', $user_id)->count();
            $data['favoritos'] = Favorito::where('user_id', $user_id)->count();

            $ebooksPorMes = EbookModel::where('user_id', $user_id)
                ->select(DB::raw('MONTH(created_at) as mes'), DB::raw('count(*) as total'))
                ->groupBy('mes')
                ->pluck('total', 'mes');

            $grafico = array_fill(0, 12, 0);

            foreach ($ebooksPorMes as $mes => $total) {
                $grafico[$mes - 1] = $total;
            }

            $data['grafico'] = $grafico;

            return $data;
        });

        // =========================
        // EBOOKS DO USUÁRIO (FOREVER)
        // =========================
        Cache::forget('ebooks_user_'.$user_id);

        Cache::rememberForever('ebooks_user_'.$user_id, function () use ($user_id) {
            return EbookModel::where('user_id', $user_id)->get();
        });

        // =========================
        // TODOS OS EBOOKS (10 min)
        // =========================
        Cache::forget('todos_ebooks');

        Cache::remember('todos_ebooks', now()->addMinutes(10), function () {
            return EbookModel::all();
        });
    }
}