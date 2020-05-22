<?php 

function isPairedBraces(string $str): bool
{
    return '' === strReplaceBracesRecursive($str);
}

function strReplaceBracesRecursive(string $str): string
{
    $str = str_replace(['{}', '[]', '()'], '', $str);
    if (
        strpos($str, '{}') !== false
        || strpos($str, '()') !== false
        || strpos($str, '[]') !== false
    ) {
        return strReplaceBracesRecursive($str);
    }

    return $str;
}
