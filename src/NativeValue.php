<?php

declare(strict_types=1);


namespace Sunthera\Common;


interface NativeValue
{
    /**
     * Native scalar representation of value object
     *
     * @return int|float|string|bool
     */
    public function toNative();
}
