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

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);

require_once("config.php");
require_once($filepath."useful_funcs.php");
	
	$retrieve_query_raw = "SELECT `q1` as q1, `q2` as q2, `q3` as q3, `q4` as q4, `q5` as q5, `q6` as q6 FROM `feedback` ORDER BY `id`;";

	$retrieve_query = mysql_query($retrieve_query_raw) or die("Something bad happened... Please inform the webmaster of this error: ".mysql_error());
	
	$rows = mysql_num_rows($retrieve_query);
	
	if($rows > 0) {
		print "<table border=\"1\">";
		print "<tr>
			<th>Question #1</th>
			<th>Question #2</th>
			<th>Question #3</th>
			<th>Question #4</th>
			<th>Question #5</th>
			<th>Question #6</th>
		</tr>";

		while($survey = mysql_fetch_array($retrieve_query)) {

			print "</td><td>" . nl2br($survey['q1']) . "</td>
					<td>" . nl2br($survey['q2']) . "</td>
					<td>" . nl2br($survey['q3']) . "</td>
					<td>" . nl2br($survey['q4']) . "</td>
					<td>" . nl2br($survey['q5']) . "</td>
					<td>" . nl2br($survey['q6']) . "</td>
				</tr>";
		}

	} else {
		print "Database table is empty. No feedback has been submitted yet.";
	}

?>
