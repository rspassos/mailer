<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Services\Sendmail;

class Send extends Controller
{
    public function __construct(
        private Sendmail $mailService
    ) {
    }

    public function index(MailRequest $request)
    {
        return $this->mailService->send($request);
    }
}
