<?php include("top.html"); ?>

<!-- 
		Stephen Brannen
		CSC 365 Fall 2013
		Missouri State University
		Homework 4

		matches.php
		Eccentric: \\eccentric\class\csc365\001\brannen01\HW4
		Personal Site: http://csc.stephenbrannen.com/HW4/matches.php
-->

<form action="matches-submit.php" method="get">
<fieldset>
<legend>Returning User:</legend>

<ul>
<li>
<strong>Name:</strong>
<input type="text" name="name" size="16" />
</li>
</ul>
                        
<input type="submit" value="View My Matches">
</fieldset>
</form>

<?php include("bottom.html"); ?>