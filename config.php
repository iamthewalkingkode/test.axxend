<?php

/**************************************
************* 2017 FAYASMS ************
******** @date : WED 13 JUN 2018 ******
*** @author : ANCHORA TECHNOLOGIES ****
**************************************/

# G L o B A L
global $msg, $status, $page, $action, $type, $option, $thisform, $thisname, $thiskode, $kode, $data, $submit;

# M A I N
define( 'DS'          ,		DIRECTORY_SEPARATOR );
define( 'ROOT'        , 	dirname(__FILE__).DS );
define( 'FRWK'        , 	$_SERVER['DOCUMENT_ROOT'].DS );

# A P P
define( '__PUBLIC__'	  ,		ROOT.'_public'.DS );
define( '__TEMPL__'		  ,		ROOT.'_lib'.DS.'tpl'.DS );
define( '__CONTROL__'	  ,		ROOT.'_lib'.DS.'ctrl'.DS );
define( '__AJAX__'		  ,		ROOT.'_lib'.DS.'ajax'.DS );

# G E N E R A L
define( 'PEPPER'      ,		'FzF{zYkRr(AzTNBXj6)#ruex8Y}k42KU' );
define( 'DEBUG'       ,		FALSE );
define( 'ERROR'       ,		TRUE );
define( 'MYSQL'       ,     FALSE );

# _ F R A M E W O R K
require_once(FRWK.'_framework'.DS.'auto-load.php');

# U R L s
define( '_WEB_'       ,		WEB.'_assets/' );

# A P I
$server = 'https://restapi.fayasms.com/v2/';
$server = 'http://localhost/fayasms.api/v2/';
$apiKey = 'bW17gnIGNPS1FRIqILQmXJLWNLGMXbdG';
$apiToken = Session::get('fia_token') == true ? Session::get('fia_token') : 'null';
$apiToken = 'Authorization: Basic: '.$apiKey.'.'.$apiToken;
define('API', $server);



# Pages segments setup
$p = 1;
$action = Permalinks::segment($p+1);
$type = Permalinks::segment($p+2);
$option = Permalinks::segment($p+3);
$thisform = Permalinks::segment($p+4);
$action = empty($action)?'dashboard':$action;


require('ctrl/submit.php');
