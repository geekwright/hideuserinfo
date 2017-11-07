<?php

$modversion['dirname'] = basename(__DIR__);

$modversion['name']                = _MI_HIDEUSERINFO_NAME;
$modversion['version']             = '1.0.0';
$modversion['description']         = _MI_HIDEUSERINFO_DESC;
$modversion['author']              = 'geekwright';
$modversion['credits']             = 'Richard Griffith';
$modversion['min_php']             = '5.3.7';
$modversion['min_xoops']           = '2.5.9';
$modversion['system_menu']         = 1;
$modversion['help']                = 'page=help';
$modversion['license']             = 'GNU GPL v2 or higher';
$modversion['license_url']         = XOOPS_URL . '/modules/' . $modversion['dirname'] . '/docs/license.txt';
$modversion['official']            = 0;
$modversion['image']               = 'assets/images/logoModule.png';

// About stuff
$modversion['module_status']       = 'Final';
$modversion['release_date']        = '2017/11/07';

$modversion['developer_lead']      = 'geekwright';
$modversion['module_website_url']  = 'https://xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['developer_email']     = 'richard@geekwright.com';


// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 0;

// Search
$modversion['hasSearch'] = 0;

// comments
$modversion['hasComments'] = 0;

// notification
$modversion['hasNotification'] = 0;
