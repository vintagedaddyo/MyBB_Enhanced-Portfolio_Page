<?php
/**
*
* MyBB 1.8 Modern Portfolio
* folio.php
* Tutorial by: vintagedaddyo
* https://community.mybb.com/user-6029.html
*
*/

define('IN_MYBB', 1);
define('THIS_SCRIPT', 'folio.php');

$templatelist = "folio";

require_once './global.php';
add_breadcrumb("Portfolio", "folio.php");
eval('$folio = "'.$templates->get('folio').'";');
output_page($folio);

?>