<?php

declare(strict_types=1);


namespace Sunthera\Common;


use Assert\Assertion;

abstract class StringId extends CompactValue implements NativeValue
{
    private string $id;

    private function __construct()
    {
    }

    /**
     * @param string $id
     *
     * @return static
     * @throws \Assert\AssertionFailedException
     */
    public static function fromString(string $id)
    {
        Assertion::notEmpty($id);
        Assertion::string($id);

        $instance = new static();
        $instance->id = $id;

        return $instance;
    }

    public function toString(): string
    {
        return $this->id;
    }

    public function toNative(): string
    {
        return $this->toString();
    }
}
