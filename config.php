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

$db_name = "dbname";
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$filepath = "";


$link = mysql_connect($db_host, $db_user, $db_pass);
if (!$link) {
	die('Could not connect to database: ' . mysql_error());
} else {
	mysql_select_db($db_name, $link);
}

?>