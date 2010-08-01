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

function homepageRedirect() {
	header("Location:http://www.example.com/");
}

// trims whitespace, slashes, prepares for database input
function safeSql($input) {
        return mysql_real_escape_string(stripslashes(trim($input)));
}

?>