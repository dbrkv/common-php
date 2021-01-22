<?php

declare(strict_types=1);


namespace Sunthera\Common;


interface Value
{
    /**
     * @param $other
     *
     * @return bool
     */
    public function sameValueAs($other): bool;
}
