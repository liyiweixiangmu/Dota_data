<?php

declare(strict_types=1);

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Varena\SDK\Request\VarenaRequest;

class VarenaRequestTest extends TestCase
{

    public function testRequest()
    {
        $guzzleHttp = new VarenaRequest('9f0d413d574a4d2','aa7393febc764fccae0ea59367bb0e9');
        $response = $guzzleHttp->getData('/data-service/dota2/pro/league/ti/rank-player',[]);

        $this->assertArrayHasKey('data',$response);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testGuzzle()
    {
        $guzzleHttp = new GuzzleHttp('www.baidu.com');

        $response = $guzzleHttp->enableDebug(true)->request('get');

        $this->assertInstanceOf(Response::class, $response);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
