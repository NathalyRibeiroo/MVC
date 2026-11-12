<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregaController extends Controller
{
    public function index()
    {
        $entregas = [
            [
                'destinatario' => 'João Silva',
                'cidade' => 'São Paulo'
            ],
            [
                'destinatario' => 'Maria Santos',
                'cidade' => 'Rio de Janeiro'
            ],
            [
                'destinatario' => 'Pedro Oliveira',
                'cidade' => 'Belo Horizonte'
            ]
        ];

        return view('entregas', ['entregas' => $entregas]);
    }
}

