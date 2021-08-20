<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Services\Sendmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Send extends Controller
{
    public function __construct(
        private Sendmail $mailService
    ) {
    }

    public function index(MailRequest $request): JsonResponse
    {
        $result = $this->mailService->send($request);

        return new JsonResponse(
            [ 'success' => $result ],
            200
        );
    }
}
