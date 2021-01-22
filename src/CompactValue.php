<?php

declare(strict_types=1);


namespace Sunthera\Common;


abstract class CompactValue implements Value
{
    /**
     * @param CompactValue|object|mixed $other
     *
     * @return bool
     */
    public function sameValueAs($other): bool
    {
        if (get_class($other) !== get_class($this)) {
            return false;
        }

        return $this->toString() === $other->toString();
    }

    /**
     * @return string
     */
    abstract public function toString(): string;

    public function __toString(): string
    {
        return $this->toString();
    }
}
