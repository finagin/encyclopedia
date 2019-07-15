<?php

namespace App;

class StringHelper
{
    /**
     * @var array
     */
    protected static $slugify_countable = [];

    /**
     * @param string $value
     * @param bool $countable
     * @return string
     */
    public static function slugify($value = '', $countable = false): string
    {
        $value = mb_strtolower($value);

        $replaces = [
            '/ /' => '-',
            '/%([abcdef]|\d){2,2}/' => '',
            '/[\/?!:\[\]`.,()*"\';{}+=<>~$|#@&–—]/u' => '',
            '/[。？！，、；：“”【】（）〔〕［］﹃﹄“ ”‘’﹁﹂—…－～《》〈〉「」]/u' => '',
        ];

        foreach ($replaces as $pattern => $replacement) {
            $value = preg_replace($pattern, $replacement, $value);
        }

        $value = urlencode($value);

        if ($countable) {
            if (isset(static::$slugify_countable[$value])) {
                $value .= '-'.(++static::$slugify_countable[$value]);
            } else {
                static::$slugify_countable[$value] = 0;
            }
        }

        return $value;
    }
}
