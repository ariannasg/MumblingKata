<?php declare(strict_types=1);

namespace Kata\Mumbling\Test;

use Kata\Mumbling\Mumbler;
use PHPUnit\Framework\TestCase;

class MumblerTest extends TestCase
{
    /**
     * @dataProvider provideMumbleLetters
     */
    public function testMumbleLetters(string $input, string $expectedOutput): void
    {
        $mumbler = new Mumbler();

        self::assertEquals(
            $expectedOutput,
            $mumbler->mumbleLetters($input),
            "When taking \"{$input}\" we should output \"{$expectedOutput}\""
        );
    }

    public function provideMumbleLetters(): array
    {
        return [
            ['a', "A"],
            ['abC', "A-Bb-Ccc"],
            ['aBCd', "A-Bb-Ccc-Dddd"],
            ['QWERTY', "Q-Ww-Eee-Rrrr-Ttttt-Yyyyyy"],
            ['', ""],
        ];
    }
}
