<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 ********************************************************
 * Date: 2019.06.18.
 * Time: 14:10
 */

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController
{
    /**
     *
     */
    public function show(): void
    {
        Source::get();
    }
    
    public function store(Source $storeSource): void
    {
        $oneMilion = 1000000;
        for ($i = 0; $i < $oneMilion;$i++)
        {
            $storeSource->a = '';
            $storeSource->b = '';
            $storeSource->c = '';
            $storeSource->save();
        }
    }
}
