<?php
require_once 'madeline.php';

$settings = new \danog\MadelineProto\Settings();
$settings->getLogger()->setLevel(0); 

$MadelineProto = new \danog\MadelineProto\API('session.madeline', $settings);
$MadelineProto->start();

date_default_timezone_set('Asia/Tehran');
$time = date("H:i");

$en_nums = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$custom_nums = ['𝟎', '𝟏', '𝟐', '𝟑', '𝟒', '𝟓', '𝟔', '𝟕', '𝟖', '𝟗'];
$custom_time = str_replace($en_nums, $custom_nums, $time);

$MadelineProto->account->updateProfile([
    'first_name' => "($custom_time) •|𝒎𝒐𝒉𝒂𝒎𝒎𝒂𝒅 𝒓𝒆𝒛𝒂|•"
]);

echo "OK: $time";
?>