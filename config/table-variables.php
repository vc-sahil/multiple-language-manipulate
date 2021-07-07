<?php

use App\IndustrySector;
use App\User;

return [
    /*
     * Users table used to store users
     */
    'users_table' => 'users',

    'user' => User::class,

    /*
     * Industry Sector table used to store industry sector
     */
    'industry_sector_table' => 'industry_sectors',

    'industry_sector' => IndustrySector::class,

    /*
     * Field post fix which denote language specific data field (key=> table name/module identification,value => field name)
     * Key is same as the table name which is define in config-variable file
    */
    'field_post_fix' => [
        'industry_sectors'     => 'industry_sector_name',
    ],
];
