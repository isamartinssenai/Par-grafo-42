<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class RenovaCache implements ShouldQueue
{
    use Queueable;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function handle(): void
    {
        Cache::forget('dashboard_'.$this->user->id);

        Cache::rememberForever('dashboard_'.$this->user->id, function () {

            $data = [];

            $data['totalEbook'] = EbookModel::where('user_id', $this->user->id)->count();
            $data['favoritos'] = Favorito::where('user_id', $this->user->id)->count();

            $data['ebooksPorMes'] = EbookModel::where('user_id', $this->user->id)
                ->select(DB::raw('MONTH(created_at) as mes'), DB::raw('count(*) as total'))
                ->groupBy('mes')
                ->pluck('total', 'mes');

            $data['grafico'] = array_fill(0, 12, 0);

            return $data;
        });
    }
}
