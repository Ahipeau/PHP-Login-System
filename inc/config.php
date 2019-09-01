 <?php

//If there is the contant defined called _CONFIG_
if (!defined('__CONFIG__')) {
	# code...
	exit ('You do not have a config file');
}

//

/*error_reporting(-1);
ini_sert('display_errors', 'On');
*/
include_once"classes/db.php";
include_once"classes/Filter.php";

$con = DB::getConnection();

 ?> 