<?php


namespace Core;

class Str {

/**
 * The function "limit" takes a string and limits its length to a specified number of characters,
 * appending a suffix if necessary.
 * 
 * @param String The input string that you want to limit the length of.
 * @param limit The limit parameter is used to specify the maximum length of the string. If the length
 * of the string exceeds this limit, it will be trimmed down to the specified limit.
 * @param suffix The suffix parameter is an optional parameter that allows you to specify a string that
 * will be appended to the limited string if the original string exceeds the specified limit.
 * 
 * @return the limited string. If the length of the input string is greater than the specified limit,
 * it trims the string to the limit and appends the suffix. If the string is already within the limit,
 * it returns the string as is.
 */
    public static function limit($String, $limit = 100, $suffix = null)
    {

        // Check if the length of the string is greater than the limit
        if (strlen($String) > $limit) {
            // Trim the string to the specified limit and append the suffix
            $limitedString = substr($String, 0, $limit) . $suffix;
        } else {
            // If the string is already within the limit, keep it as is
            $limitedString = $String;
        }

        return $limitedString;
    }




}