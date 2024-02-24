<?php declare(strict_types=1);

namespace KataTests;

use Kata\Rover;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{
    public Rover $rover;

    public function setUp(): void
    {
        $this->rover = new Rover();
    }

    public static function moveCommand()
    {
        yield 'given_an_M_command_the_rover_should_be_0_1_N' => ['M', '0:1:N'];
        yield 'given_an_MM_command_the_rover_should_be_0_2_N' => ['MM', '0:2:N'];
        yield 'given_an_MMM_command_the_rover_should_be_0_3_N' => ['MMM', '0:3:N'];
    }

    public static function leftCommand()
    {
        yield 'given_a_L_command_the_rover_should_be_0_0_W' => ['L', '0:0:W'];
        yield 'given_LL_the_rover_should_be_0_0_S' => ['LL', '0:0:S'];
        yield 'given_LLL_the_rover_should_be_0_0_E' => ['LLL', '0:0:E'];
        yield 'given_LLLL_the_rover_should_be_0_0_N' => ['LLLL', '0:0:N'];
        yield 'given_LLLLLL_the_rover_should_be_0_0_S' => ['LLLLLL', '0:0:S'];
    }

    #[test]
    #[DataProvider('moveCommand')]
    public function given_a_move_command_the_rover_should_move(string $command, string $expectedPosition)
    {
        $finalPosition = $this->rover->execute($command);

        self::assertEquals($expectedPosition, $finalPosition);
    }

    #[test]
    #[DataProvider('leftCommand')]
    public function given_rotation_to_the_left_commands_the_rover_should_rotate_left(string $command, string $expectedPosition)
    {
        $finalPosition = $this->rover->execute($command);

        self::assertEquals($expectedPosition, $finalPosition);
    }


    #[test]
    public function given_not_a_command_the_rover_landing_position_should_be_0_0_N(): void
    {
        $finalPosition = $this->rover->execute('');

        self::assertSame('0:0:N', $finalPosition);
    }
}
