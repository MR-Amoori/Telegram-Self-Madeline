<?php
require_once 'madeline.php';

function gregorian_to_jalali($gy, $gm, $gd) {
    $g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
    $gy2 = ($gm > 2) ? ($gy + 1) : $gy;
    $days = 355666 + (365 * $gy) + (int)(($gy2 + 3) / 4) - (int)(($gy2 + 99) / 100) + (int)(($gy2 + 399) / 400) + $gd + $g_d_m[$gm - 1];
    $jy = -1595 + 33 * (int)($days / 12053);
    $days %= 12053;
    $jy += 4 * (int)($days / 1461);
    $days %= 1461;
    if ($days > 365) { $jy += (int)(($days - 1) / 365); $days = ($days - 1) % 365; }
    if ($days < 186) { $jm = 1 + (int)($days / 31); $jd = 1 + ($days % 31); }
    else { $jm = 7 + (int)(($days - 186) / 30); $jd = 1 + (($days - 186) % 30); }
    return [$jy, $jm, $jd];
}

$settings = new \danog\MadelineProto\Settings();
$settings->getLogger()->setLevel(0); 

// قرار دادن مستقیم API برای جلوگیری از خطا
$settings->getAppInfo()->setApiId(/*ApiId*/);
$settings->getAppInfo()->setApiHash(/*ApiHash*/);

$MadelineProto = new \danog\MadelineProto\API('session.madeline', $settings);
$MadelineProto->start();

date_default_timezone_set('Asia/Tehran');

$time_name = date("H-i");
$en_nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$super_nums = ['⁰', '¹', '²', '³', '⁴', '⁵', '⁶', '⁷', '⁸', '⁹'];
$custom_time_name = str_replace($en_nums, $super_nums, $time_name);
$first_name = "•|𝒎𝒐𝒉𝒂𝒎𝒎𝒂𝒅 𝒓𝒆𝒛𝒂|• " . $custom_time_name;

$bio_time = date("g:i A");
$gregorian_date = date("d/n/y");

list($jy, $jm, $jd) = gregorian_to_jalali(date('Y'), date('m'), date('d'));
$jalali_date = "$jy/$jm/$jd";
$fa_nums = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
$jalali_date_fa = str_replace($en_nums, $fa_nums, $jalali_date);

$bio = "<mramoori.ir/>\n$bio_time | $gregorian_date | $jalali_date_fa";

$MadelineProto->account->updateProfile([
    'first_name' => $first_name,
    'about' => $bio
]);

echo "OK";
?>