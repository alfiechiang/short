<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 */
class Short extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shorts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url','shorturl'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}