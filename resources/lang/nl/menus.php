<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Toegangs Beheer',

            'roles' => [
                'all' => 'Alle Rollen',
                'create' => 'Creëer Rol',
                'edit' => 'Rol aanpassen',
                'management' => 'Rol Beheer',
                'main' => 'Rollen',
            ],

            'users' => [
                'all' => 'Alle Gebruikers',
                'change-password' => 'Wachtwoord veranderen',
                'create' => 'Gebruiker aanmaken',
                'deactivated' => 'Gedeactiveerde Gebruikers',
                'deleted' => 'Verwijderde Gebruikers',
                'edit' => 'Gebruiker aanpassen',
                'main' => 'Gebruikers',
                'view' => 'Bekijk Gebruiker',
            ],
        ],

        'log-viewer' => [
            'main' => 'Logs',
            'dashboard' => 'Dashboard',
            'logs' => 'Logs',
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general' => 'Algemeen',
            'history' => 'Geschiedenis',
            'system' => 'Systeem',
        ],
    ],

    'language-picker' => [
        'language' => 'Taal',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar' => 'Arabisch (Arabic)',
            'zh' => 'Chinees (Chinese Simplified)',
            'zh-TW' => 'Chinees (Chinese Traditional)',
            'da' => 'Deens (Danish)',
            'de' => 'Duits (German)',
            'el' => 'Grieks (Greek)',
            'en' => 'Engels (English)',
            'es' => 'Spaans (Spanish)',
            'fa' => 'Perzisch (Persian)',
            'fr' => 'Frans (French)',
            'he' => 'Hebreeuws (Hebrew)',
            'id' => 'Indonesisch (Indonesian)',
            'it' => 'Italiaans (Italian)',
            'ja' => 'Japans (Japanese)',
            'nl' => 'Nederlands (Dutch)',
            'no' => 'Noors (Norwegin)',
            'pt_BR' => 'Braziliaans Portugees (Brazilian Portuguese)',
            'ru' => 'Russisch (Russian)',
            'sv' => 'Zweeds (Swedish)',
            'th' => 'Thais (Thai)',
            'tr' => 'Turks (Turkish)',
            'uk' => 'Oekraïens (Ukrainian)',
        ],
    ],
];
