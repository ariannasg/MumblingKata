<?php declare(strict_types=1);

namespace Kata\Mumbling;

class Mumbler
{
    /**
     * @param string|null $input
     * @return string
     */
    public function mumbleLetters(?string $input): string
    {
        if ($input === null) {
            return '';
        }

        return $this->format($input);
    }

    /**
     * @param string $input
     * @return string
     */
    private function format(string $input): string
    {
        $output = '';

        $input = str_replace(' ', '', $input);
        $inputLetters = str_split($input);
        $inputSize = count($inputLetters);

        foreach ($inputLetters as $index => $letter) {
            for ($i = 0; $i <= $index; $i++) {
                if ($i === 0) {
                    $output .= strtoupper($letter);
                } else {
                    $output .= strtolower($letter);
                }
            }

            if ($index < $inputSize - 1) {
                $output .= '-';
            }
        }

        return $output;
    }
}