<?php

function get_clean_email($email = null)
{
    $clean_email = null;
    if ($email) {
        $clean_email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    return $clean_email;
}

function get_clean_alphanum($alphanum = null)
{
    $clean_alphanum = null;
    if ($alphanum) {
        $alphanum_pattern = "/^([\p{Latin}\d .\"\'\-\(\)]*)/u";
        preg_match($alphanum_pattern, $alphanum, $matches);
        $clean_alphanum = addslashes($matches[1]);
    }

    return $clean_alphanum;
}

function get_clean_integer($integer = null, $max = null)
{
    $clean_integer = null;
    if ($integer) {
        $clean_integer = (int)$integer;
        if ($max && $clean_integer > $max) $clean_integer = $max;
    }

    return $clean_integer;
}

define("PEPPER", "UK3NRrtc$(3vESPUj>r%,^_CzK.[byBY");

function get_nonce($id)
{
    $nonce = hash('sha512', PEPPER + $_COOKIE["PHPSESSID"] + $id);
    return $nonce;
}

function check_nonce($id, $nonce)
{
    return $nonce == get_nonce($id);
}
