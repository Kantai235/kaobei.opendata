<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'Alle',
        'yes' => 'Ja',
        'no' => 'Nee',
        'custom' => 'Aangepast',
        'actions' => 'Acties',
        'active' => 'Actief',
        'buttons' => [
            'save' => 'Bewaar',
            'update' => 'Bijwerken',
        ],
        'hide' => 'Verberg',
        'inactive' => 'Inactief',
        'none' => 'Geen',
        'show' => 'Toon',
        'toggle_navigation' => 'Navigatie omschakelen',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Rol Creëren',
                'edit' => 'Rol Aanpassen',
                'management' => 'Rol Beheer',

                'table' => [
                    'number_of_users' => 'Aantal Gebruikers',
                    'permissions' => 'Permissies',
                    'role' => 'Rol',
                    'sort' => 'Sorteer',
                    'total' => 'rol|rollen',
                ],
            ],

            'users' => [
                'active' => 'Actieve Gebruikers',
                'all_permissions' => 'Alle Permissies',
                'change_password' => 'Wachtwoord veranderen',
                'change_password_for' => 'Wachtwoord veranderen voor :user',
                'create' => 'Gebruiker Aanmaken',
                'deactivated' => 'Gedeactiveerde Gebruikers',
                'deleted' => 'Verwijderde Gebruikers',
                'edit' => 'Gebruiker aanpassen',
                'management' => 'Gebruikers Beheer',
                'no_permissions' => 'Geen Permissie',
                'no_roles' => 'Geen rollen beschikbaar.',
                'permissions' => 'Permissies',

                'table' => [
                    'confirmed' => 'Bevestigd',
                    'created' => 'Gecreëerd',
                    'email' => 'E-mailadres',
                    'id' => 'ID',
                    'last_updated' => 'Laatst Bijgewerkt',
                    'first_name' => 'Voornaam',
                    'last_name' => 'Achternaam',
                    'name' => 'Naam',
                    'no_deactivated' => 'Geen gedeactiveerde Gebruikers',
                    'no_deleted' => 'Geen Verwijderde Gebruikers',
                    'roles' => 'Rollen',
                    'social' => 'Social',
                    'total' => 'gebruiker|gebruikers',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overzicht',
                        'history' => 'Geschiedenis',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Bevesstigd',
                            'created_at' => 'Gecreëerd',
                            'deleted_at' => 'Verwijderd',
                            'email' => 'E-mailadres',
                            'last_login_at' => 'Laatst ingelogd op',
                            'last_login_ip' => 'Laatst ingelogd IP',
                            'last_updated' => 'Laatst bijgewerkt',
                            'name' => 'Naam',
                            'status' => 'Status',
                            'timezone' => 'Tijdzone',
                        ],
                    ],
                ],

                'view' => 'Bekijk gebruiker',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Inloggen',
            'login_button' => 'Inloggen',
            'login_with' => 'Inloggen via :social_media',
            'register_box_title' => 'Registreer',
            'register_button' => 'Registreer',
            'remember_me' => 'Onthoud Mij',
        ],

        'contact' => [
            'box_title' => 'Contacteer ons',
            'button' => 'Verzenden',
        ],

        'passwords' => [
            'forgot_password' => 'Wachtwoord Vergeten?',
            'reset_password_box_title' => 'Wachtwoord Resetten',
            'reset_password_button' => 'Wachtwoord herstellen',
            'send_password_reset_link_button' => 'Stuur Wachtwoord Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Wachtwoord veranderen',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Gecreëerd',
                'edit_information' => 'Informatie aanpassen',
                'email' => 'E-mailadres',
                'last_updated' => 'Voor het laatst aangepast',
                'name' => 'Naam',
                'update_information' => 'Informatie bijwerken',
            ],
        ],
    ],
];
