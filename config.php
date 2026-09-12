<?php 

// define a default path constant
define('PATH', getenv('DOCUMENT_ROOT') . '/libs/');
define('ROOT', getenv('DOCUMENT_ROOT') . '/'); 
 $rui = explode('/',$_SERVER['REQUEST_URI'] )[1] ?? 'dashboard';
 $rui = explode('?',$rui)[0];      
        
//define('DASHBOARD', getenv('DOCUMENT_ROOT') . '/views/dashboard/');
define('ADMIN', getenv('DOCUMENT_ROOT') . "/views/{$rui}/");
define('PROFILE_NAV', "{$rui}" );

define('SERVER', $_ENV['SERVER']);
define('USERNAME', $_ENV['USERNAME']);
define('PASSWORD', $_ENV['PASSWORD']);
define('DBNAME', $_ENV['DBNAME']);
define('CODE_VERSION', $_ENV['CODE_VERSION']);
define('SYSTEM', $_ENV['SYSTEM']);
define('UPLOADS', $_ENV['UPLOADS']);
define('DOMAIN_NAME', $_ENV['DOMAIN_NAME']);
define('ALERTS_RECIPIENT', $_ENV['ALERTS_RECIPIENT']);
define('GOOGLE_SECRET', $_ENV['GOOGLE_SECRET']);
define('GOOGLE_CLIENT', $_ENV['GOOGLE_CLIENT']);
define('SEND_FROM', $_ENV['SEND_FROM']);
define('API_DOMAIN', $_ENV['API_DOMAIN']);
define('PROJECT_ID', $_ENV['PROJECT_ID']);

