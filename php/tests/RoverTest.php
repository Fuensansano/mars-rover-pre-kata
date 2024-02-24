<?php declare(strict_types=1);

namespace KataTests;

use Kata\Rover;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{
    #[test]
    public function given_not_a_command_the_rover_landing_position_should_be_0_0_N(): void
    {
        $rover = new Rover();

        $finalPosition = $rover->execute('');

        self::assertSame('0:0:N', $finalPosition);
    }
}
