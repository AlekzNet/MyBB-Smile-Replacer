<?php
/*
Smile Replacer
by: Alekz.Net
https://www.alekz.net
Copyright 2022 Alekz.Net
*/

if (!defined('IN_MYBB'))
    die('This file cannot be accessed directly.');

$plugins->add_hook("parse_message_me_mycode", "SmileReplacer_process");

function SmileReplacer_info()
{
    return array(
        "name" => "Smile Replacer",
        "description" => "Replaces smilies with emojies.",
        "website" => "https://www.alekz.net",
        "author" => "Alekz.Net",
        "authorsite" => "https://www.alekz.net",
        "version" => "1.0.0.1",
        "compatibility" => "18*"
    );
}

function SmileReplacer_process(&$message)
{
    global $mybb;
    $smilies = array (':)' => '😊', ':-)' => '😊', ':D' =>'😁', ':(' => '☹',  ':-(' => '☹', ';)' => '😉', ';-)' => '😉',
    ' :/' => '😕',  ':-/' => '😕', ':\\' => '😕', ':|' => '😐', ';(' => '😢',  ';-(' => '😢', ':o' => '😯', ':O' => '😮',':@'=> '😡', ':P' => '😋',
    ':rolleyes:' => '🙄', ':angel:' => '😇', ':heart:' => '♥', ':exclamation:' => '❗', ":cool:" => '😎');
    $message = str_replace(array_keys($smilies), array_values($smilies), $message);
    return $message;
}
