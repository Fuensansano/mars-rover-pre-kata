<?php declare(strict_types=1);

namespace KataTests;

use Kata\Rover;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{
    public static function moveCommand()
    {
        yield 'given_an_M_command_the_rover_should_be_0_1_N' => ['M', '0:1:N'];
        yield 'given_an_MM_command_the_rover_should_be_0_2_N' => ['MM', '0:2:N'];
        yield 'given_an_MMM_command_the_rover_should_be_0_3_N' => ['MMM', '0:3:N'];
    }

    #[test]
    #[DataProvider('moveCommand')]
    public function given_a_move_command_the_rover_should_move(string $command, string $expectedPosition)
    {
        $rover = new Rover();

        $finalPosition = $rover->execute($command);

        self::assertEquals($expectedPosition, $finalPosition);
    }


    #[test]
    public function given_not_a_command_the_rover_landing_position_should_be_0_0_N(): void
    {
        $rover = new Rover();

        $finalPosition = $rover->execute('');

        self::assertSame('0:0:N', $finalPosition);
    }

    #[test]
    public function given_a_rotate_left_command_the_rover_should_be_0_0_W(): void
    {
        $rover = new Rover();

        $finalPosition = $rover->execute('L');

        self::assertEquals('0:0:W', $finalPosition);
    }

    #[test]
    public function given_LL_the_rover_should_be_0_0_S(): void
    {
        $rover = new Rover();

        $finalPosition = $rover->execute('LL');

        self::assertEquals('0:0:S', $finalPosition);
    }
}
