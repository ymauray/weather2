<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "weather2"
 *
 * Auto generated by Extension Builder 2016-05-04
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Weather',
    'description' => 'Display weather data using various Weather APIs. Default API: OpenWeatherMap',
    'category' => 'plugin',
    'author' => 'Markus Kugler, Pascal Rinker',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-7.6.99',
            'php' => '5.3.7-7.9.99',
            'static_info_tables' => '6.3.0'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);