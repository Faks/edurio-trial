<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Source;
use SplFixedArray;

use function collect;

use const PHP_EOL;

class EdurioController
{
    /**
     * Set maximum range for array
     *
     * @var int
     */
    private $setRange = 1000000;

    /**
     * Set how big sub array chunks are
     *
     * @var int
     */
    private $setChunkStep = 50;

    /**
     * Set CSV Header
     *
     * @var array
     */
    private static $getCsvHeader = [
        'a',
        'b',
        'c',
    ];

    public function show(): void
    {
        echo '<ul>
<li class="nav-item">
                        <a class="nav-link" href="https://bitbucket.org/Faks/edurio-trial/src/master/">Bitbucket</a>
                    </li>
<li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/oskars-germovs-a94b3318a/">LinkedIn</a>
                    </li>
                    </ul>
                    <p></p>';

        $getSource = Source::select(['a', 'b', 'c'])->get();

        $file = \fopen('php://output', 'w');
        \fputcsv($file, self::$getCsvHeader, ';', PHP_EOL);

        foreach ($getSource as $source) {
            \fputcsv($file, [$source->a, $source->b, $source->c], ';', PHP_EOL);
        }
    }

    public function store(): void
    {
        foreach ($this->getMillionArrayChunk($this->setRange) as $getMillionArrayChunkDepthFirst) {
            foreach ($getMillionArrayChunkDepthFirst as $getMillionArrayChunkDepthSecond) {
                $storeSource = new Source();
                $storeSource->a = $getMillionArrayChunkDepthSecond;
                $storeSource->b = $getMillionArrayChunkDepthSecond / 100 * 3;
                $storeSource->c = $getMillionArrayChunkDepthSecond / 100 * 5;
                $storeSource->save();
            }
        }
    }

    /**
     * @param int $getOneMillion get amount
     *
     * @return SplFixedArray
     */
    private function getMillionArray($getOneMillion): SplFixedArray
    {
        $getMillionArray = new SplFixedArray($getOneMillion);

        for ($i = 0; $i < $getOneMillion; ++$i) {
            $getMillionArray[$i] = $i;
        }

        return $getMillionArray;
    }

    /**
     * Breaking Down big array
     *
     * @param int $getOneMillion get amount
     *
     * @return array
     */
    private function getMillionArrayChunk($getOneMillion): array
    {
        return collect($this->getMillionArray($getOneMillion))
            ->chunk($this->setChunkStep)
            ->toArray();
    }
}
