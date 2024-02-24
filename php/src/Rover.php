<?php declare(strict_types=1);

namespace Kata;

class Rover
{
    public function execute(string $command): string
    {
        if ($command) {
            return "0:1:N";
        }
        return '0:0:N';
    }
}
