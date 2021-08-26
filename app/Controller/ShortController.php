<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use App\Service\ShortService;


class ShortController
{
    private $service;

    public function __construct (ShortService $service)
    {
        $this->service=$service;
    }

    public function create(RequestInterface  $request,ResponseInterface $response)
    {
       
        $this->service->create($request);
        $data = [
            'code' => 200,
            'message' => "創建成功",
            'data'=>[]
        ];
        return $data;
    }

    public function divert(RequestInterface  $request,ResponseInterface $response){
        header('Location: https://tzuhsiang.com');
        exit();
    }
}
