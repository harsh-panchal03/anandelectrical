<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

defined('ADMIN_THEME') OR define('ADMIN_THEME' , "#fff");

defined('SITE_URL') OR define('SITE_URL' , 'http://localhost/anandelectrical/');
defined('DATE_TIME')    or define('DATE_TIME' , date("y-m-d"));
defined('ROLE_ADMIN') OR define('ROLE_ADMIN' , "admin");
defined('ROLE_USER') OR define('ROLE_USER' , "user");

defined('DEFAULT_DATE_FORMATE') OR define('DEFAULT_DATE_FORMATE' , "DD-MM-YYYY");

defined('SHOW_CONFIRM_BOX') OR define('SHOW_CONFIRM_BOX' , TRUE);

defined('LOGIN_URL') OR define('LOGIN_URL' , SITE_URL.'login/');
defined('LOGIN_TABLE') OR define('LOGIN_TABLE' , "login_master");

defined('LOGIN_FOLDER') OR define('LOGIN_FOLDER' , 'login/');
defined('ADMIN_FOLDER') OR define('ADMIN_FOLDER' , 'admin/');
defined('ASSET_FOLDER') OR define('ASSET_FOLDER' , SITE_URL."assets/");
defined('AJAX_FOLDER') OR define('AJAX_FOLDER', ADMIN_FOLDER."ajax-view/");
defined('JS_FOLDER') OR define('JS_FOLDER' , ASSET_FOLDER."js/");
defined('CSS_FOLDER') OR define('CSS_FOLDER' , ASSET_FOLDER."css/");
defined('IMAGES_FOLDER') OR define('IMAGES_FOLDER' , ASSET_FOLDER."images/");
defined('FONTAWESOME_FOLDER') OR define('FONTAWESOME_FOLDER' , ASSET_FOLDER."fontawesome/");
defined('ACTIVE_STATUS') OR define('ACTIVE_STATUS' , 1);
defined('INACTIVE_STATUS') OR define('INACTIVE_STATUS' , 0);

defined('ACTIVE_STATUS_TEXT') OR define('ACTIVE_STATUS_TEXT' , "Active");
defined('INACTIVE_STATUS_TEXT') OR define('INACTIVE_STATUS_TEXT' , "Inactive");

defined('SUCCESS_AJAX_CALL') OR define('SUCCESS_AJAX_CALL' , 1);
defined('ERROR_AJAX_CALL') OR define('ERROR_AJAX_CALL' , 101);


defined('PER_PAGE') OR define('PER_PAGE', 20);
defined('DEFAULT_PAGE_INDEX') OR define('DEFAULT_PAGE_INDEX', 1);

defined('DASHBOARD_URL') OR define('DASHBOARD_URL', SITE_URL.'dashboard/');
defined('SUB_STATION_URL') OR define('SUB_STATION_URL', SITE_URL . "sub_station/");
defined('SUB_STATION_MASTER_TABLE') OR define('SUB_STATION_MASTER_TABLE', 'sub_station_master');

defined('EXECUTIVE_ENGINEER') OR define('EXECTIVE_ENGNEER', "executive_engineer");
defined('DEPUTY_ENGINEER') OR define('DEPUTY_ENGINEER', "deputy_engineer");
defined('JUNIOR_ENGINEER') OR define('JUNIOR_ENGINEER', "junior_engineer");

defined('KV_66_SUB_STATION') OR define('KV_66_SUB_STATION', 66);
defined('KV_132_SUB_STATION') OR define('KV_132_SUB_STATION', 132);
defined('KV_220_SUB_STATION') OR define('KV_220_SUB_STATION', 220);
defined('KV_400_SUB_STATION') OR define('KV_400_SUB_STATION', 400);


defined('CITY_TABLE') OR define('CITY_TABLE', "city_master");
defined('CITY_URL') OR define('CITY_URL', SITE_URL."city_master/");
defined('LOCALITY_TABLE') OR define('LOCALITY_TABLE', "locality_master");
defined('LOCALITY_URL') OR define('LOCALITY_URL', SITE_URL."locality_master/");

defined('GUJARAT_STATE_ID') OR define('GUJARAT_STATE_ID', 1);
defined('MAHARASTRA_STATE_ID') OR define('MAHARESTRA_STATE_ID', 2);

defined('INQUIRY_MASTER_TABLE') OR define('INQUIRY_MASTER_TABLE',"inquiry_master");
defined('INQUIRY_MASTER_URL') OR define('INQUIRY_MASTER_URL',SITE_URL . "inquiry_master/");
defined('ANAND') OR define('ANAND', "ANAND ELECTRICAL");
defined('UNNATI') OR define('UNNATI', "UNNATI CORPORATION");
defined('BHAVESH') OR define('BHAVESH', "BHAVESH TEXTITLE");
defined('KRUPAL') OR define('KRUPAL', "KRUPAL ENTERPRISE");
defined('NO') OR define('NO', 'NO');
defined('KG') OR define('KG', 'KG');
defined('SET') OR define('SET', 'SET');

defined('INQUIRY_DESCRIPTION_DETAILS_TABLE') or define('INQUIRY_DESCRIPTION_DETAILS_TABLE', "inquiry_description_details");
defined("DESCRIPTION_DETAILS_MASTER_TABLE") OR define('DESCRIPTION_DETAILS_MASTER_TABLE', "description_details_master"); 

defined("DESCRIPTION_DETAILS_MASTER_URL") OR define('DESCRIPTION_DETAILS_MASTER_URL', SITE_URL."description_master/");

defined('VENDOR_MASTER_URL') OR define('VENDOR_MASTER_URL', SITE_URL."vendor_master/");
defined('VENDOR_MASTER_TABLE') OR define('VENDOR_MASTER_TABLE', "vendor_master");