<?php

namespace Tests\Unit;

use App\Http\Controllers\Send;
use App\Http\Requests\MailRequest;
use App\Services\Sendmail;
use Illuminate\Http\JsonResponse;
use PHPUnit\Framework\TestCase;
use Mockery;

class SendControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_send_controller()
    {
        $requestMock = Mockery::mock(MailRequest::class);
        $requestMock->shouldReceive('passes')->andReturn(true);

        $sendMailServiceMock = Mockery::mock(Sendmail::class);
        $sendMailServiceMock
            ->shouldReceive('send')
            ->once()
            ->andReturn(true);

        $sendController = new Send($sendMailServiceMock);
        $response = $sendController->index($requestMock);

        $jsonBody = $response->getContent();
        $arrayResponse = json_decode($jsonBody, true);

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertJson($jsonBody);
        $this->assertArrayHasKey('success',$arrayResponse);
    }
}
