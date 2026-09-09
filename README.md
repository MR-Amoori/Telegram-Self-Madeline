```markdown
# 🤖 Telegram Self-Bot | سلف‌بات پیشرفته تلگرام

<p align="center">
  <img src="https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version" />
  <img src="https://img.shields.io/badge/MadelineProto-v8.6.5-blue?style=for-the-badge&logo=telegram&logoColor=white" alt="MadelineProto Version" />
  <img src="https://img.shields.io/badge/Status-Active-success?style=for-the-badge" alt="Project Status" />
  <img src="https://img.shields.io/badge/License-MIT-orange?style=for-the-badge" alt="License" />
</p>

<p align="center">
  <strong>سلف‌بات سبک، پایدار و قابل مدیریت برای به‌روزرسانی خودکار پروفایل تلگرام</strong>
</p>

---

## 🇮🇷 فارسی

### 📖 معرفی پروژه

این پروژه یک **سلف‌بات یا UserBot تلگرام** سبک، پایدار و امن است که با استفاده از زبان برنامه‌نویسی **PHP** و کتابخانه قدرتمند **MadelineProto** توسعه داده شده است.

سلف‌بات به‌صورت خودکار نام و بیوگرافی حساب کاربری تلگرام را براساس زمان محلی، تاریخ میلادی و تاریخ هجری شمسی به‌روزرسانی می‌کند.

همچنین یک پنل مدیریت وب مدرن برای کنترل وضعیت ربات، مشاهده وضعیت سرویس و مدیریت آسان قابلیت‌ها در نظر گرفته شده است.

> ⚠️ **هشدار:** استفاده از سلف‌بات‌ها ممکن است با قوانین و سیاست‌های تلگرام مغایرت داشته باشد. مسئولیت استفاده از این پروژه و حساب کاربری برعهده کاربر است.

---

## ✨ قابلیت‌ها

### 🕒 آپدیت هوشمند نام

- تغییر خودکار نام حساب کاربری
- نمایش ساعت پویا در نام
- استفاده از اعداد بالانویس یا `Super-script`
- به‌روزرسانی خودکار براساس زمان محلی

### 📝 آپدیت پویا و هماهنگ بیوگرافی

بیوگرافی حساب کاربری می‌تواند شامل اطلاعات زیر باشد:

- آدرس وب‌سایت
- ساعت محلی با فرمت ۱۲ ساعته
- تاریخ میلادی
- تاریخ هجری شمسی یا جلالی
- نمایش اعداد فارسی
- به‌روزرسانی خودکار و هماهنگ اطلاعات

### 🖥️ پنل مدیریت تحت وب

- رابط کاربری مدرن و کاربرپسند
- امکان روشن یا خاموش‌کردن آنی ربات
- مدیریت وضعیت ربات از طریق مرورگر
- مناسب برای اجرا روی هاست اشتراکی
- دسترسی آسان بدون نیاز به اتصال مستقیم SSH

### 📡 سیستم پینگ و مانیتورینگ

- بررسی وضعیت آنلاین‌بودن سرویس
- نمایش وضعیت اجرای ربات
- مشاهده میزان مصرف RAM سرور
- کمک به بررسی سلامت Cron Job و فرآیند اجرای ربات

### 🔐 امنیت و پایداری

- ذخیره‌سازی محلی نشست تلگرام
- عدم نیاز به سرورهای پیچیده
- قابلیت اجرا روی هاست اشتراکی
- استفاده از فایل JSON برای ذخیره تنظیمات
- مدیریت ساده وضعیت روشن یا خاموش‌بودن ربات

### 🌙 حالت صرفه‌جویی و خاموشی

با خاموش‌کردن ربات از طریق پنل مدیریت:

- فرآیند به‌روزرسانی متوقف می‌شود.
- نام حساب به مقدار پیش‌فرض بازمی‌گردد.
- بیوگرافی حساب به مقدار پیش‌فرض بازمی‌گردد.
- ربات بدون نیاز به حذف نشست، در حالت غیرفعال قرار می‌گیرد.

---

## 🛠️ تکنولوژی‌های استفاده‌شده

| بخش | تکنولوژی |
|---|---|
| زبان برنامه‌نویسی | PHP |
| استاندارد کدنویسی | PHP Strict Types |
| کتابخانه اصلی | MadelineProto `v8.6.5` |
| ذخیره‌سازی تنظیمات | JSON |
| رابط کاربری پنل | HTML5 و CSS3 |
| طراحی رابط کاربری | Modern Flexbox Design |
| زمان‌بندی اجرا | Cron Job |
| محیط اجرا | Shared Hosting / Linux Hosting |

---

## 📂 ساختار پروژه

```text
public_html/
├── madeline.php
├── bot.php
├── panel.php
├── config.json
└── session.madeline/
```

### توضیح فایل‌ها و پوشه‌ها

| مسیر | توضیح |
|---|---|
| `madeline.php` | کتابخانه اصلی اتصال و ارتباط با تلگرام |
| `bot.php` | فایل اجرایی اصلی سلف‌بات و منطق به‌روزرسانی پروفایل |
| `panel.php` | پنل مدیریت تحت وب با رابط کاربری مدرن |
| `config.json` | فایل تنظیمات و وضعیت فعال یا غیرفعال‌بودن ربات |
| `session.madeline/` | پوشه ذخیره محلی و امن نشست حساب تلگرام |

> 🔒 پوشه `session.madeline/` و فایل `config.json` حاوی اطلاعات حساس هستند. از قرارگرفتن مستقیم آن‌ها در دسترس عمومی وب جلوگیری کنید.

---

## 🚀 نحوه نصب و راه‌اندازی

### پیش‌نیازها

برای اجرای پروژه به موارد زیر نیاز دارید:

- هاست لینوکسی یا هاست اشتراکی
- PHP نسخه `7.4` یا `8.x`
- امکان اجرای Cron Job
- دسترسی به فایل‌های هاست
- حساب فعال تلگرام
- دسترسی به پنل مدیریت هاست مانند cPanel

---

### مرحله اول: آپلود فایل‌ها

تمام فایل‌های پروژه را در مسیر زیر هاست آپلود کنید:

```text
public_html/
```

ساختار فایل‌ها باید مشابه ساختار زیر باشد:

```text
public_html/
├── madeline.php
├── bot.php
├── panel.php
└── config.json
```

---

### مرحله دوم: قرار دادن کتابخانه MadelineProto

مطمئن شوید فایل زیر در کنار سایر فایل‌های اصلی پروژه قرار دارد:

```text
madeline.php
```

این فایل وظیفه ایجاد ارتباط میان پروژه و سرورهای تلگرام را برعهده دارد.

---

### مرحله سوم: ورود به پنل مدیریت

فایل زیر را در مرورگر خود باز کنید:

```text
https://your-domain.com/panel.php
```

سپس با رمز عبور پیش‌فرض وارد پنل شوید:

```text
admin123
```

> ⚠️ برای امنیت بیشتر، رمز پیش‌فرض را قبل از استفاده در محیط واقعی تغییر دهید.

---

### مرحله چهارم: تنظیم Cron Job

در پنل مدیریت هاست یا cPanel، یک Cron Job ایجاد کنید تا فایل `bot.php` را هر یک دقیقه اجرا کند.

نمونه دستور:

```bash
* * * * * /usr/local/bin/php /home/USERNAME/public_html/bot.php
```

در دستور بالا، مقدار `USERNAME` را با نام کاربری واقعی هاست خود جایگزین کنید.

در برخی هاست‌ها مسیر PHP ممکن است متفاوت باشد. نمونه‌های دیگر:

```bash
* * * * * php /home/USERNAME/public_html/bot.php
```

یا:

```bash
* * * * * /usr/bin/php /home/USERNAME/public_html/bot.php
```

---

### مرحله پنجم: احراز هویت اولیه تلگرام

برای اولین اجرا، فایل زیر را در مرورگر باز کنید:

```text
https://your-domain.com/bot.php
```

در اجرای اول، اطلاعات احراز هویت حساب تلگرام از شما دریافت می‌شود:

1. شماره تلفن حساب تلگرام را وارد کنید.
2. کد تأیید ارسال‌شده از طرف تلگرام را وارد کنید.
3. در صورت فعال‌بودن تأیید دومرحله‌ای، رمز عبور آن را وارد کنید.
4. پس از احراز هویت، نشست محلی ساخته می‌شود.

پس از تکمیل فرآیند، پوشه زیر ایجاد خواهد شد:

```text
session.madeline/
```

از این پس، برنامه از نشست ذخیره‌شده برای اجرای خودکار استفاده می‌کند.

---

## ⚙️ نحوه عملکرد پروژه

روند کلی اجرای سلف‌بات به شکل زیر است:

```text
شروع اجرای bot.php
        │
        ▼
بررسی وضعیت ربات در config.json
        │
        ├── خاموش است
        │      └── بازگرداندن نام و بیوگرافی پیش‌فرض
        │
        └── روشن است
               ├── دریافت زمان محلی
               ├── تولید تاریخ میلادی
               ├── تولید تاریخ جلالی
               ├── به‌روزرسانی نام حساب
               └── به‌روزرسانی بیوگرافی حساب
```

---

## 🔒 توصیه‌های امنیتی

- رمز پیش‌فرض پنل را تغییر دهید.
- فایل `config.json` را در معرض دسترسی عمومی قرار ندهید.
- پوشه `session.madeline/` را به‌صورت عمومی قابل دانلود نکنید.
- اطلاعات ورود حساب تلگرام را در اختیار دیگران قرار ندهید.
- از اجرای پروژه روی هاست‌های ناشناس خودداری کنید.
- پیش از هر تغییر، از فایل نشست نسخه پشتیبان امن تهیه کنید.
- در صورت انتشار عمومی پروژه، اطلاعات حساس را از کد حذف کنید.
- دسترسی فایل‌های حساس را محدود کنید.

نمونه مجوز پیشنهادی برای فایل‌های حساس:

```bash
chmod 600 config.json
chmod 700 session.madeline
```

---

## 🧪 عیب‌یابی مشکلات رایج

### اجرا نشدن Cron Job

موارد زیر را بررسی کنید:

- مسیر PHP صحیح باشد.
- مسیر کامل فایل `bot.php` وارد شده باشد.
- دسترسی اجرای Cron Job فعال باشد.
- نسخه PHP انتخاب‌شده با پروژه سازگار باشد.
- خطاها در فایل Log بررسی شوند.

### ساخته‌نشدن نشست تلگرام

موارد زیر را بررسی کنید:

- شماره تلفن با فرمت صحیح وارد شده باشد.
- کد تأیید منقضی نشده باشد.
- رمز عبور دومرحله‌ای صحیح باشد.
- دسترسی نوشتن در مسیر پروژه وجود داشته باشد.
- پوشه `session.madeline/` حذف یا قفل نشده باشد.

### به‌روزرسانی نشدن نام یا بیوگرافی

موارد زیر را بررسی کنید:

- وضعیت ربات در `config.json` روی `On` باشد.
- Cron Job به‌درستی اجرا شود.
- نشست تلگرام معتبر باشد.
- محدودیت‌های تلگرام بررسی شود.
- زمان سرور و منطقه زمانی به‌درستی تنظیم شده باشد.

---

## 👨‍💻 درباره سازنده

این پروژه با ❤️ توسط **محمدرضا عموری** توسعه داده شده است.

### مشخصات سازنده

- نام: محمدرضا عموری
- تخصص: Full Stack Developer
- حوزه‌های علاقه‌مندی:
  - برنامه‌نویسی
  - فناوری و دنیای دیجیتال
  - تربیت و سبک زندگی
  - روان‌شناسی
  - توسعه نرم‌افزار

### وب‌سایت رسمی

[https://mramoori.ir](https://mramoori.ir)

---

# 🇬🇧 English

## 📖 Project Overview

This project is a lightweight, stable, and secure **Telegram Self-Bot / UserBot** developed with **PHP** and the powerful **MadelineProto** library.

The self-bot automatically updates the user's Telegram first name and biography based on local time, Gregorian dates, and Jalali dates.

It also includes a modern web management panel that allows users to control the bot status, monitor the service, and manage its features through a browser.

> ⚠️ **Disclaimer:** Telegram self-bots may violate Telegram's Terms of Service and policies. The user is solely responsible for using this project and for any consequences involving their Telegram account.

---

## ✨ Features

### 🕒 Smart Name Updates

- Automatically updates the account's first name
- Displays dynamic time information
- Supports stylish superscript numbers
- Updates the name according to local time

### 📝 Dynamic and Synchronized Biography

The account biography may include:

- Website address
- Local time in 12-hour format
- Gregorian date
- Jalali or Persian date
- Persian numerals
- Automatic and synchronized updates

### 🖥️ Web Management Panel

- Modern and user-friendly interface
- Instantly toggle the bot on or off
- Manage the bot status through a browser
- Suitable for shared hosting environments
- No direct SSH access required for basic management

### 📡 Ping and Monitoring System

- Checks whether the service is online
- Displays the current bot status
- Shows server RAM usage
- Helps verify Cron Job and bot execution status

### 🔐 Security and Stability

- Local Telegram session storage
- No complex server infrastructure required
- Compatible with shared hosting environments
- JSON-based configuration storage
- Simple status management system

### 🌙 Graceful Fallback and Shutdown Mode

When the bot is disabled from the management panel:

- The update process stops.
- The account name returns to its default value.
- The account biography returns to its default value.
- The bot remains safely disabled without deleting the session.

---

## 🛠️ Tech Stack

| Category | Technology |
|---|---|
| Programming Language | PHP |
| Coding Standard | PHP Strict Types |
| Core Library | MadelineProto `v8.6.5` |
| Configuration Storage | JSON |
| Panel Frontend | HTML5 and CSS3 |
| UI Design | Modern Flexbox Design |
| Task Scheduling | Cron Job |
| Runtime Environment | Shared Hosting / Linux Hosting |

---

## 📂 Project Structure

```text
public_html/
├── madeline.php
├── bot.php
├── panel.php
├── config.json
└── session.madeline/
```

### File and Directory Description

| Path | Description |
|---|---|
| `madeline.php` | Core Telegram connection and communication library |
| `bot.php` | Main self-bot execution file and profile update logic |
| `panel.php` | Modern web-based management dashboard |
| `config.json` | Bot configuration and on/off status |
| `session.madeline/` | Local and secure Telegram session storage directory |

> 🔒 The `session.madeline/` directory and `config.json` file may contain sensitive information. Prevent direct public access to them.

---

## 🚀 Installation and Setup

### Requirements

You need the following to run the project:

- Linux or shared hosting
- PHP `7.4` or `8.x`
- Cron Job support
- File access to the hosting environment
- An active Telegram account
- A hosting control panel such as cPanel

---

### Step 1: Upload the Files

Upload all project files to the following directory:

```text
public_html/
```

The resulting structure should look similar to:

```text
public_html/
├── madeline.php
├── bot.php
├── panel.php
└── config.json
```

---

### Step 2: Add MadelineProto

Make sure the following file is placed alongside the main project files:

```text
madeline.php
```

This file handles communication between the project and Telegram servers.

---

### Step 3: Open the Management Panel

Open the following URL in your browser:

```text
https://your-domain.com/panel.php
```

Log in using the default password:

```text
admin123
```

> ⚠️ For better security, change the default password before using the project in production.

---

### Step 4: Configure the Cron Job

Create a Cron Job in cPanel or your hosting control panel to execute `bot.php` every minute.

Example:

```bash
* * * * * /usr/local/bin/php /home/USERNAME/public_html/bot.php
```

Replace `USERNAME` with your actual hosting username.

Depending on the hosting environment, the PHP path may be different:

```bash
* * * * * php /home/USERNAME/public_html/bot.php
```

or:

```bash
* * * * * /usr/bin/php /home/USERNAME/public_html/bot.php
```

---

### Step 5: Initial Telegram Authentication

For the first run, open:

```text
https://your-domain.com/bot.php
```

During the first execution:

1. Enter your Telegram phone number.
2. Enter the verification code sent by Telegram.
3. Enter your two-step verification password if enabled.
4. Wait until the local session is created.

After successful authentication, the following directory will be generated:

```text
session.madeline/
```

The application will use this saved session for future automatic executions.

---

## ⚙️ How the Project Works

The general execution flow is:

```text
Start bot.php
        │
        ▼
Read bot status from config.json
        │
        ├── Disabled
        │      └── Restore default name and biography
        │
        └── Enabled
               ├── Get local time
               ├── Generate Gregorian date
               ├── Generate Jalali date
               ├── Update account name
               └── Update account biography
```

---

## 🔒 Security Recommendations

- Change the default panel password.
- Do not expose `config.json` publicly.
- Prevent public downloads of `session.madeline/`.
- Never share your Telegram login credentials.
- Avoid running the project on unknown hosting providers.
- Keep a secure backup of the session files.
- Remove sensitive data before publishing the project publicly.
- Restrict access to sensitive files and directories.

Example permissions for sensitive files:

```bash
chmod 600 config.json
chmod 700 session.madeline
```

---

## 🧪 Common Troubleshooting

### Cron Job Does Not Run

Check the following:

- The PHP path is correct.
- The full path to `bot.php` is used.
- Cron Job execution is enabled by the hosting provider.
- The selected PHP version is compatible with the project.
- Server logs and application logs are checked.

### Telegram Session Is Not Created

Check the following:

- The phone number is entered in the correct format.
- The verification code has not expired.
- The two-step verification password is correct.
- The project directory is writable.
- The `session.madeline/` directory has not been deleted or locked.

### Name or Biography Is Not Updated

Check the following:

- The bot status in `config.json` is set to `On`.
- The Cron Job is running correctly.
- The Telegram session is valid.
- Telegram limitations are taken into account.
- The server timezone is configured correctly.

---

## 👨‍💻 About the Creator

Developed with ❤️ by **Mohammadreza Amoori**.

### Creator Information

- Name: Mohammadreza Amoori
- Role: Full Stack Developer
- Areas of interest:
  - Programming
  - Technology and digital products
  - Education and lifestyle
  - Psychology
  - Software development

### Official Website

[https://mramoori.ir](https://mramoori.ir)

---

## 📄 License

This project is released under the **MIT License**.

See the `LICENSE` file for more information.
```