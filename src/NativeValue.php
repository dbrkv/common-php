<?php

declare(strict_types=1);


namespace Sunthera\Common;


interface NativeValue
{
    /*
     * Native scalar representation of value object
     */
    public function toNative(): int|float|string|bool;
}
