<?php
namespace App\Service;
use App\Repository\ShortRepository;
class ShortService{
    
    private $repository;

    public function __construct (ShortRepository $repository)
    {
        $this->repository=$repository;
    }

    public function create($request){
        $this->repository->create($request);
    }


}
