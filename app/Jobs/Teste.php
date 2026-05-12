<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Usuario;
use App\Mail\BemVindoMail;


class Teste implements ShouldQueue
{
    use Queueable;

   
    use Queueable;
    public $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function handle(): void
    {
        Mail::to($this->usuario->email)->send(new BemVindoMail($this->usuario));
    }
}
