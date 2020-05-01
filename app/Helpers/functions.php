<?php

function phone_to_int(string $phone)
{
    $trim = trim($phone);
    return str_replace(['(', ')', ' '], '', $trim);
}
