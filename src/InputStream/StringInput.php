<?php declare(strict_types = 1);

namespace pcrov\JsonReader\InputStream;

class StringInput implements \IteratorAggregate
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getIterator() : \Generator
    {
        $string = $this->string;
        $length = strlen($string);
        /** @noinspection ForeachInvariantsInspection */
        for ($i = 0; $i < $length; $i++) {
            yield $string[$i];
        }
    }
}
