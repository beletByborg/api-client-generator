<?php

declare(strict_types=1);

namespace Test\Schema;

interface SerializableInterface
{
    public function toArray(): array;
}
