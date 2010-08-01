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
?>

<html>
<head><title>Feedback Form</title></head>
<body>
<h1>Feedback Form</h1>
<form action="validate.php" method="post" autocomplete="off">
    <div>
    <ol type="1">
<li>Questions #1<br />
        <textarea name="q1" rows="5" cols="50"></textarea></li>
        <li>Questions #2<br />
        <textarea name="q2" rows="5" cols="50"></textarea></li>
            <li>Questions #3<br />
            <textarea name="q3" rows="5" cols="50"></textarea></li>
            <li>Questions #4<br />
            <textarea name="q4" rows="5" cols="50"></textarea></li>
            <li>Questions #5<br />
            <textarea name="q5" rows="5" cols="50"></textarea></li>
             <li>Questions #6<br />
            <textarea name="q6" rows="5" cols="50"></textarea></li>
        </li>
    </ol>
    <input type="submit" value="submit" class="form-submit" /></div>
</form></body>
</html>
