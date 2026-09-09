<?php
declare(strict_types=1);
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
    else { $jm = 7 + (int)(($days - 186) / 30); $jd = 1 + (($days - 186) / 30); }
    return [$jy, $jm, $jd];
}

$settings = new \danog\MadelineProto\Settings();
$settings->getLogger()->setLevel(0); 
$settings->getAppInfo()->setApiId(1658958);
$settings->getAppInfo()->setApiHash('972b7e35650f7cb7cf43c276befcd594');

$config_data = @file_get_contents(__DIR__ . '/config.json');
$config = $config_data ? json_decode($config_data, true) : [];
$status = $config['bot_status'] ?? 'off';

$MadelineProto = new \danog\MadelineProto\API('session.madeline', $settings);
$MadelineProto->start();

if ($status === 'on') {
    date_default_timezone_set('Asia/Tehran');
    $time_name = date("H-i", strtotime("+1 minute"));
    
    $en_nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $super_nums = ['⁰', '¹', '²', '³', '⁴', '⁵', '⁶', '⁷', '⁸', '⁹'];
    $custom_time_name = str_replace($en_nums, $super_nums, $time_name);
    $first_name = "•|𝒎𝒐𝒉𝒂𝒎𝒎𝒂𝒅 𝒓𝒆𝕫𝒂|• " . $custom_time_name;

    $bio_time = date("g:i A", strtotime("+1 minute"));
    $gregorian_date = date("Y/m/d");

    list($jy, $jm, $jd) = gregorian_to_jalali((int)date('Y'), (int)date('m'), (int)date('d'));
    $jalali_date = "$jy/$jm/$jd";
    $fa_nums = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
    $jalali_date_fa = str_replace($en_nums, $fa_nums, $jalali_date);

    $bio = "<mramoori.ir/>\n$bio_time | $gregorian_date | $jalali_date_fa";

    $MadelineProto->account->updateProfile([
        'first_name' => $first_name,
        'about' => $bio
    ]);
} else {
    $MadelineProto->account->updateProfile([
        'first_name' => "•|𝒎𝒐𝒉𝒂𝒎𝒎𝒂𝒅 𝒓𝒆𝒛𝒂|•",
        'about' => "<mramoori.ir/>"
    ]);
}

try {
    $history = $MadelineProto->messages->getHistory(['peer' => 'me', 'limit' => 1]);
    if (isset($history['messages'][0])) {
        $msg = $history['messages'][0];
        $msgId = $msg['id'] ?? 0;
        $msgText = trim(strtolower($msg['message'] ?? ''));
        
        $lastIdFile = __DIR__ . '/last_ping.txt';
        $lastProcessedId = file_exists($lastIdFile) ? (int)file_get_contents($lastIdFile) : 0;

        if ($msgText === 'ping' && $msgId > $lastProcessedId) {
            file_put_contents($lastIdFile, (string)$msgId);
            $ram = round(memory_get_usage(true) / 1048576, 2);
            $MadelineProto->messages->sendMessage([
                'peer' => 'me',
                'message' => "🤖 سلف‌بات آنلاین است!\n💻 مصرف رم: {$ram} MB"
            ]);
        }
    }
} catch (\Throwable $e) {}

echo "OK";
?>