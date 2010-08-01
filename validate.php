<?php

/*
	Simple Anonymous Feedback
	Created by Michael Soares (mikesoares.com)

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once("config.php");
require_once($filepath."useful_funcs.php");

if($_POST) {
	
	$q1 = isset($_POST['q1'])?safeSql($_POST['q1']):'';
	$q2 = isset($_POST['q2'])?safeSql($_POST['q2']):'';
	$q3 = isset($_POST['q3'])?safeSql($_POST['q3']):'';
	$q4 = isset($_POST['q4'])?safeSql($_POST['q4']):'';
	$q5 = isset($_POST['q5'])?safeSql($_POST['q5']):'';
	$q6 = isset($_POST['q6'])?safeSql($_POST['q6']):'';
	
	$insert_query_raw = sprintf("INSERT INTO `feedback` (`q1`, `q2`, `q3`, `q4`, `q5`, `q6`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')", $q1, $q2, $q3, $q4, $q5, $q6);
	
	$insert_query = mysql_query($insert_query_raw) or die(mysql_error());
	print("Thank you for your submission. You can now close this window.");
} else {
	homepageRedirect();
}

?>
