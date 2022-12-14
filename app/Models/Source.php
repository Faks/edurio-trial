<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
     * Database Table
     *
     * @var string
     */
    protected $table = 'source';

    /**
     * Mass Assignments
     *
     * @var array
     */
    protected $fillable = [
        'a',
        'b',
        'c'
    ];
}
