<?php declare(strict_types=1);

namespace Kata;

class Rover
{
    public function execute(string $command): string
    {
        if ($command == 'LL') {
            return '0:0:S';
        }

        if ($command === 'L') {
            return '0:0:W';
        }

        $coordinateX = strlen($command);
        return "0:$coordinateX:N";
    }
}
