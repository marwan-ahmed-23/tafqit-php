<?php

class Tafqit
{
    /**
     * Convert Arabic numbers to English numbers for consistency.
     * 
     * @param string $number
     * @return string
     */
    private function convertArabicNumbersToEnglish($number)
    {
        $arabicNumbers = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($arabicNumbers, $englishNumbers, $number);
    }

    /**
     * Convert a number to its textual representation.
     * 
     * @param int|float|string $number
     * @param string $locale
     * @return string
     */
    public function numberToText($number, $locale = 'en')
    {
        // Ensure the number is in English
        $number = $this->convertArabicNumbersToEnglish($number);

        if (!is_numeric($number)) {
            throw new InvalidArgumentException("Invalid number provided.");
        }

        // Use NumberFormatter for localization
        $formatter = new NumberFormatter($locale, NumberFormatter::SPELLOUT);
        return $formatter->format($number);
    }
}
