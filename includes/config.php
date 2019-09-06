<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'pretty_uri' => false,
        'site_url' =>'https://anthony-obando-assignment-1.herokuapp.com/' , //'https://csuphpdemo.herokuapp.com'
        'nav_menu' => [
            '' => 'Home',
            'about-me' => 'About Me',
            'contact'=> 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
