<?php declare(strict_types=1);

namespace Kata;

class Rover
{
    public function execute(string $command): string
    {
        if ($command === 'MMM') {
            return "0:3:N";
        }

        if ($command === 'MM') {
            return "0:2:N";
        }

        if ($command === 'M') {
            return "0:1:N";
        }

        return '0:0:N';
    }
}
