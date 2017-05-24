<?php

return

    [
        /*
         * The siteId is used to retrieve and display Google Analytics statistics
         * in the admin-section.
         *
         * Should look like: ga:xxxxxxxx.
         */
        //'siteId' => 'ga:151039595',
        'siteId' => 'ga:151038124',

        /*
         * Set the client id
         *
         * Should look like:
         * xxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com
         */
        //'clientId' => 'b82ccb4f7095398f2a8c002fa5a35c147d4cdfc9.apps.googleusercontent.com',
        'clientId' => '037199597765ef1d523e213d1c2ebcdc9bf00196.apps.googleusercontent.com',

        /*
         * Set the service account name
         *
         * Should look like:
         * xxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx@developer.gserviceaccount.com
         */
        //'serviceEmail' => 'api-791@citystarsproperties-168211.iam.gserviceaccount.com',
        'serviceEmail' => 'api-429@tssegypt-168219.iam.gserviceaccount.com',

        /*
         * You need to download a p12-certifciate from the Google API console
         * Be sure to store this file in a secure location.
         */
        'certificatePath' => storage_path('laravel-analytics/tssegypt-037199597765.p12'),

        /*
         * The amount of minutes the Google API responses will be cached.
         * If you set this to zero, the responses won't be cached at all.
         */
        'cacheLifetime' => 60 * 24 * 2,

        /*
         * The amount of seconds the Google API responses will be cached for
         * queries that use the real time query method. If you set this to zero,
         * the responses of real time queries won't be cached at all.
         */
        'realTimeCacheLifetimeInSeconds' => 5,
    ];
