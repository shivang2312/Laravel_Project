<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => 'pk_test_Z2DDeH3kXmgKeUaFxs6tO9zJ',
        'secret' => 'sk_test_MdLCUjJ3cpxAp2awfqO2FY8p',
    ],

    'google' => [
        'client_id' => '378500453154-g7boa7e8jvv99dm59hfie3ilthv092e8.apps.googleusercontent.com',
        'client_secret' => 'DDLxDuWL77ZS0WlwaXQsGXQM',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '308249489589738',
        'client_secret' => '4f3183666013f95b82dad79ef80f1173',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '3rc7KZjBp1eh8IBMK1YTcwyDc',
        'client_secret' => '01Wmgph78toKrNK6AYofRZKp0bTs5Ik2x7k2uEVFjknvicRxnw',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],



];
