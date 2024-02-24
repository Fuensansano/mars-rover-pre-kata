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

    #[test]
    public function given_an_M_command_the_rover_should_be_0_1_N(): void
    {
        $rover = new Rover();

        $finalPosition = $rover->execute('M');

        self::assertSame('0:1:N', $finalPosition);
    }

    #[test]
    public function given_an_MM_command_the_rover_should_be_0_2_N(): void
    {
        $rover = new Rover();

        $finalPosition = $rover->execute('MM');

        self::assertEquals('0:2:N', $finalPosition);
    }

    #[test]
    public function given_an_MMM_command_the_rover_should_be_0_3_N(): void
    {
        $rover = new Rover();

        $finalPosition = $rover->execute('MMM');

        self::assertEquals('0:3:N', $finalPosition);
    }
}
