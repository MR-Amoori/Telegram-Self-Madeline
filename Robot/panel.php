<?php
session_start();
if (isset($_POST['password']) && $_POST['password'] === 'admin123') {
    $_SESSION['logged_in'] = true;
}
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: panel.php");
    exit;
}
if (!isset($_SESSION['logged_in'])) {
    echo '<!DOCTYPE html><html dir="rtl"><head><meta charset="utf-8"><title>ورود</title><style>body{background:#1e1e2f;color:#fff;font-family:Tahoma,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0;}form{background:#2d2d44;padding:30px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.3);text-align:center;}input{padding:10px;margin:10px 0;width:200px;border-radius:5px;border:none;background:#3f3f5f;color:#fff;text-align:center;}button{padding:10px 20px;background:#4e73df;color:#fff;border:none;border-radius:5px;cursor:pointer;}button:hover{background:#3b5998;}</style></head><body><form method="POST"><h3>ورود به پنل مدیریت</h3><input type="password" name="password" placeholder="رمز عبور"><br><button type="submit">ورود</button></form></body></html>';
    exit;
}
$configFile = 'config.json';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $config['bot_status'] = isset($_POST['bot_status']) ? 'on' : 'off';
    file_put_contents($configFile, json_encode($config));
    $msg = "تغییرات با موفقیت ذخیره شد!";
}
$config_data = @file_get_contents($configFile);
$config = $config_data ? json_decode($config_data, true) : ['bot_status' => 'off'];
$status = $config['bot_status'] ?? 'off';
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت ربات</title>
    <style>
        body { background: #f4f6f9; font-family: Tahoma, sans-serif; margin: 0; padding: 40px; display: flex; justify-content: center; }
        .card { background: #fff; width: 100%; max-width: 400px; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        h2 { margin-top: 0; color: #333; font-size: 20px; border-bottom: 2px solid #f0f0f0; padding-bottom: 10px; }
        .status-badge { display: inline-block; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; margin-bottom: 20px; }
        .status-on { background: #e1fef0; color: #00c853; }
        .status-off { background: #ffebee; color: #d32f2f; }
        .form-group { margin: 20px 0; display: flex; align-items: center; justify-content: space-between; background: #fafafa; padding: 12px 15px; border-radius: 8px; border: 1px solid #eee; }
        label { cursor: pointer; font-weight: bold; color: #555; }
        input[type="checkbox"] { width: 20px; height: 20px; cursor: pointer; }
        .btn-save { background: #4e73df; color: #fff; border: none; padding: 12px; width: 100%; border-radius: 8px; font-size: 14px; cursor: pointer; font-family: Tahoma; font-weight: bold; }
        .btn-save:hover { background: #3b5998; }
        .logout-link { display: block; text-align: center; margin-top: 20px; color: #e74c3c; text-decoration: none; font-size: 13px; }
        .logout-link:hover { text-decoration: underline; }
        .msg { background: #e8f5e9; color: #2e7d32; padding: 10px; border-radius: 6px; font-size: 13px; margin-bottom: 15px; text-align: center; }
    </style>
</head>
<body>
    <div class="card">
        <h2>مدیریت سلف‌بات</h2>
        <div>وضعیت فعلی: <span class="status-badge <?php echo ($status === 'on') ? 'status-on' : 'status-off'; ?>"><?php echo ($status === 'on') ? 'روشن (فعال)' : 'خاموش'; ?></span></div>
        
        <?php if(isset($msg)) echo "<div class='msg'>$msg</div>"; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="bot_status">روشن بودن ربات</label>
                <input type="checkbox" id="bot_status" name="bot_status" value="on" <?php echo ($status === 'on') ? 'checked' : ''; ?>>
            </div>
            <button type="submit" name="save" class="btn-save">ذخیره تغییرات</button>
        </form>
        <a href="panel.php?logout=1" class="logout-link">خروج از حساب</a>
    </div>
</body>
</html>