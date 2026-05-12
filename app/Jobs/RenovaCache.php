<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Cache;
use App\Models\EbookModel;
use App\Models\Favorito;
use Illuminate\Support\Facades\DB;

class RenovaCache
{
    use Dispatchable, Queueable;

    protected $user_id;

    public function __construct($user)
    {
        $this->user_id = is_object($user) ? $user->id : $user;
    }

    public function handle(): void
{
    $user_id = $this->user_id;

    // DASHBOARD
    Cache::forget('dashboard_'.$user_id);

    Cache::remember('dashboard_'.$user_id, 60 * 5, function () use ($user_id) {

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
        $data['ebooksPorMes'] = $ebooksPorMes->toArray();

        return $data;
    });

    // TODOS OS EBOOKS
    Cache::forget('todos_ebooks');

    Cache::rememberForever('todos_ebooks', function () {
        return EbookModel::all();
    });
}
}