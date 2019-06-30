<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'roles' => [
            'created' => 'Rollen blev oprettet.',
            'deleted' => 'Rollen blev slettet.',
            'updated' => 'Rollen blev opdateret.',
        ],

        'users' => [
            'cant_resend_confirmation' => 'The application is currently set to manually approve users.',
            'confirmation_email' => 'En ny bekræftelsesmail er blevet sendt til adressen for brugeren.',
            'confirmed' => 'The user was successfully confirmed.',
            'created' => 'Brugeren blev oprettet.',
            'deleted' => 'Brugeren blev slettet.',
            'deleted_permanently' => 'Brugeren blev slettet permanent.',
            'restored' => 'Brugeren blev genskabt.',
            'session_cleared' => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated' => 'Brugeren blev opdateret.',
            'updated_password' => 'Brugerens adgangskode blev opdateret.',
        ],
    ],

    'frontend' => [
        'contact' => [
            'sent' => 'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.',
        ],
    ],
];
