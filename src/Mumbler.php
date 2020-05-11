<?php declare(strict_types=1);

namespace Kata\Mumbling;

class Mumbler
{
    public function mumbleLetters(string $input): string
    {
        $output = '';

        if ($input === null) {
            return $output;
        }

        $inputLetters = str_split($input);
        $inputSize = count($inputLetters);

        foreach ($inputLetters as $index => $inputLetter) {
            for($i = 1; $i <= $index + 1; $i++) {
                if ($i === 1) {
                    $output .= strtoupper($inputLetter);
                } else {
                    $output .= strtolower($inputLetter);
                }
            }

            if ($index + 1 < $inputSize) {
                $output .= '-';
            }
        }

        return $output;
    }
}