<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists' => 'Questo ruolo esiste già. Si prega di scegliere un nome diverso.',
                'cant_delete_admin' => 'Non è possibile eliminare il ruolo di Amministratore.',
                'create_error' => "C'è stato un problema durante la creazione di questo ruolo. Si prega di riprovare più tardi.",
                'delete_error' => "C'è stato un problema durante l'eliminazione di questo ruolo. Si prega di riprovare più tardi.",
                'has_users' => 'Non è possibile cancellare un ruolo associato a degli utenti.',
                'needs_permission' => 'Bisogna selezionare almeno un permesso per questo ruolo.',
                'not_found' => 'Questo ruolo non esiste.',
                'update_error' => "C'è stato un problema durante l'aggiornamento di questo ruolo. Si prega di riprovare più tardi.",
            ],

            'users' => [
                'already_confirmed' => 'This user is already confirmed.',
                'cant_deactivate_self' => 'Non puoi eseguire questa operazione su te stesso.',
                'cant_delete_admin' => 'You can not delete the super administrator.',
                'cant_delete_self' => 'Non puoi cancellare te stesso.',
                'cant_delete_own_session' => 'You can not delete your own session.',
                'cant_restore' => 'This user is not deleted so it can not be restored.',
                'cant_unconfirm_admin' => 'You can not un-confirm the super administrator.',
                'cant_unconfirm_self' => 'You can not un-confirm yourself.',
                'cant_confirm' => 'There was a problem confirming the user account.',
                'create_error' => "C'è stato un problema durante la creazione dell'utente. Si prega di riprovare.",
                'delete_error' => "C'è stato un problema durante l'eliminazione dell'utente. Si prega di riprovare.",
                'delete_first' => 'This user must be deleted first before it can be destroyed permanently.',
                'email_error' => 'Questo indirizzo e-mail appartiene ad un altro utente.',
                'mark_error' => "C'è stato un problema durante l'aggiornamento dell'utente. Si prega di riprovare.",
                'not_confirmed' => 'This user is not confirmed.',
                'not_found' => 'Questo utente non esiste.',
                'restore_error' => "C'è stato un problema durante il ripristino dell'utente. Si prega di riprovare.",
                'role_needed_create' => 'Devi scegliere almeno un ruolo.',
                'role_needed' => 'Devi scegliere almeno un ruolo',
                'social_delete_error' => 'There was a problem removing the social account from the user.',
                'update_error' => "C'è stato un problema durante l'aggiornamento dell'utente. Si prega di riprovare",
                'update_password_error' => "C'è stato un problema durante il cambio di password per l'utente. Si prega di riprovare.",
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'Il tuo account è già confermato',
                'confirm' => 'Conferma il tuo account!',
                'created_confirm' => "Il tuo account è stato creato con successo. Ti abbiamo inviato un'email per confermare il tuo account.",
                'created_pending' => 'Your account was successfully created and is pending approval. An e-mail will be sent when your account is approved.',
                'mismatch' => 'Il tuo codice di conferma non corrisponde',
                'not_found' => 'Questo codice di conferma non esiste.',
                'pending' => 'Your account is currently pending approval.',
                'resend' => 'Il tuo account non è confermato. Per cortesia clicca sul link di conferma nell\'email che ti abbiamo mandato, o <a href=":url">clicca qui</a> per rimandare l\'email di conferma.',
                'success' => 'Il tuo account è stato confermato con successo!',
                'resent' => "Una nuova e-mail di conferma è stata inviata all'indirizzo registrato.",
            ],

            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',

            'password' => [
                'change_mismatch' => 'Questa non è la tua vecchia password.',
                'reset_problem' => 'There was a problem resetting your password. Please resend the password reset email.',
            ],

            'registration_disabled' => 'Registration is currently closed.',
        ],
    ],
];
