<?php /*defined('BASEPATH') OR exit('No direct script access allowed');

$config['facebook_app_id']              = '168885187106070';
$config['facebook_app_secret']          = '311a26e144449f914cfcb35024eb1794';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'Auth/FacebookLogin';
$config['facebook_permissions']         = array('email');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;*/
if (!defined('BASEPATH')) exit('No direct script access allowed');
$config['appId'] = '168885187106070';
$config['secret'] = '311a26e144449f914cfcb35024eb1794';
$config['facebook_login_type'] = 'web';
$config['facebook_login_redirect_url'] = 'Gogym/register';
$config['facebook_logout_redirect_url'] = 'login/logout';
$config['facebook_permissions'] = array('email');
$config['facebook_graph_version'] = 'v2.6';
$config['facebook_auth_on_load'] = TRUE;





