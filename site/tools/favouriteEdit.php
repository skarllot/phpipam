<?php

/**
 * 
 * User selfMod check end execute
 *
 */

/* include required scripts */
require_once('../../functions/functions.php');

/* verify posted data */
CheckReferrer();

/* execute action */
if(!editFavourite($_POST)) {
	print "<div class='pHeader'>"._('Error')."</div>";
	print "<div class='pContent'><div class='alert alert-error'>"._('Error editing favourite')."!</div></div>";
	print "<div class='pFooter'><button class='btn btn-small hidePopups'>"._('Close')."</button></div>";
}
else {
	print "success";
}

?>