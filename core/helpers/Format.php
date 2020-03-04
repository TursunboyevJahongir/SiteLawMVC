<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 21:30
 */

class Format {

    /**
     * Date format method
     * @param $date string
     * @param $format string
     * @return false|string
     */
    public static function dateFormat($date, $format = 'd/M/Y') {
        $new_date = date_create($date);
        $result = date_format($new_date, $format);
        return $result;
    }

    /**
     * Truncate text method
     * @param $text
     * @param $count
     * @param string $end
     * @return string
     */
    public static function cutText($text, $count, $end = '...') {
        return substr(strip_tags($text), 0, $count) . $end;
    }

}