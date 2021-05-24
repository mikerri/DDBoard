<?php
if (! function_exists('cleanXssTags')) {
    // XSS 관련 태그 제거
    function cleanXssTags($str)
    {
        $str = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $str);

        return $str;
    }
}

if (! function_exists('getEmailAddress')) {
    // 이메일 주소 추출
    function getEmailAddress($email)
    {
        preg_match("/[0-9a-z._-]+@[a-z0-9._-]{4,}/i", $email, $matches);

        return notNullCount($matches) > 0 ? $matches[0] : '';
    }
}
