<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('3cfe5e8e-a7e4-48c2-ba97-c5d44aa4824e'),
            'secret' => env('2f26bd7245005f789ac16b2b84debb2cf957020c5e9f9da51263ece34c9e36c0'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('zabanaeschool'),
            'url' => env('http://s3.ir-thr-at1.arvanstorage.com'),
            'endpoint' => env('http://s3.ir-thr-at1.arvanstorage.com'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],

        'workFiles' => [
            'driver' => 'local',
            'root' => storage_path('app/public/workfilestorage'),
            'url' => env('APP_URL').'/storage/workfilestorage',
            'visibility' => 'public',
        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
        public_path('storage/workfilestorage') => storage_path('app/public/workfilestorage'),
    ],

];
