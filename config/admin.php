<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Admin Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور admin — همهٔ کلیدهای مستندشده در `docs/03-engines/admin.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/admin.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('ADMIN_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('ADMIN_PREFIX', 'admin:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('ADMIN_LOG_CHANNEL', 'admin'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Admin',
        'accessor' => 'admin',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];