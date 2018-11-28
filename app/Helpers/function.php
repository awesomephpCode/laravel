<?php




//判断数组中是否定义键名
function filter_is_key($key,$array)
{
    $res = array_key_exists($key,$array)?$array[$key]:null;
    return $res;
}

/**
 * 检测手机号码是否符合标准
 * @param $number
 */
function checkMobileNumberFormat($phoneNumber) {

    return preg_match("/^1[3456789]{1}\d{9}$/", $phoneNumber);

}

// 过滤掉emoji表情
function filterEmoji($str)
{
    $str = preg_replace_callback(
        '/./u',
        function (array $match) {
            return strlen($match[0]) >= 4 ? '' : $match[0];
        },
        $str);

    return $str;
}