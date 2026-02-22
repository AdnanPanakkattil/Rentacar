<?php

return [
    // ... existing code ...

    'locale' => 'en',
    'fallback_locale' => 'en',
    
    // Add this new config
    'available_locales' => [
        'en' => [
            'name' => 'English',
            'dir' => 'ltr',
            'flag' => '🇬🇧'
        ],
        'ar' => [
            'name' => 'العربية',
            'dir' => 'rtl',
            'flag' => '🇸🇦'
        ],
    ],

    // ... rest of the config ...
];