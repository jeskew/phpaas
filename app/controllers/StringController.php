<?php

class StringController extends BaseController
{
    public function strtotime($time, $format = null)
    {
        return Response::json(array(
            'string' => $time,
            'format' => $format,
            'out' => $format ? date($format, strtotime($time)) : strtotime($time)
        ));
    }

    public function metaphone($string, $phonemes = 0)
    {
        return Response::json(array(
            'string' => $string,
            'phonemes' => $phonemes,
            'out' => metaphone($string, $phonemes)
        ));
    }

    public function levenshtein($string1, $string2) {
        return Response::json(array(
            'string1' => $string1,
            'string2' => $string2,
            'out' => levenshtein($string1, $string2)
        ));
    }
} 