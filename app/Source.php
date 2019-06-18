<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'a',
        'b',
        'c'
    ];
}
