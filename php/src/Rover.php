<?php declare(strict_types=1);

namespace Kata;

class Rover
{
    public function execute(string $command): string
    {
        if (str_starts_with($command, 'L')) {
            $compassLeft = ['W', 'S', 'E'];
            $leftCommands = strlen($command) - 1;
            return "0:0:$compassLeft[$leftCommands]";
        }

        $coordinateX = strlen($command);
        return "0:$coordinateX:N";
    }
}
