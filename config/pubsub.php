<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Listen for events
    |--------------------------------------------------------------------------
    |
    | Define event name and it's listeners. Please notice that one event name may have multiple listeners
    |
    | Example:
    |
    | listen => [
    |     'UserNotified' => [
    |         'durable' => true,
    |         'listeners' => [
    |             NotifyAboutDeviceChangeListener::class,
    |         ],
    |     ]
    | ],
    |
    */
    'listen' => [
        // 'App\Events\UserUpdatedEvent' => [
        //     'durable' => true,
        //     'listeners' => [
        //         UserChangeListener::class,
        //     ],
        // ],
    ],


    /**
     * Define database tables for storing data (publishing events, incoming events, etc.)
     */
    'tables' => [
        'events' => 'pubsub_events',
    ],
];
