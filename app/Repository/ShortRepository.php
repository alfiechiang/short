<?php
namespace App\Repository;
use App\Model\Short;

class ShortRepository{

    public function __construct ()
    {
        
    }

    public function create($request){
       $short = new Short();
       $short->url='bfgfg';
       $short->shorturl='nytntnt';
       $short->save();
    }
}