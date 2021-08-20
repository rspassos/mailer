<?php

namespace App\Services;

use App\Mail\Form;
use Illuminate\Support\Facades\Mail;

class Sendmail
{
    public function send($request) {

        $data = [
            'nome' => $request->nome,
            'mensagem' => $request->mensagem,
        ];

        return Mail::to('admin@example.com')->send(new Form($data));
    }
}
