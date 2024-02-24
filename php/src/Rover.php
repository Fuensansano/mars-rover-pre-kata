<?php declare(strict_types=1);

namespace Kata;

class Rover
{
    public function execute(string $command): string
    {
        $coordinateX = strlen($command);
        return "0:$coordinateX:N";
    }
}
