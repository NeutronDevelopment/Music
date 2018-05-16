<!DOCTYPE html>
<html>
<head>
	<title>Music</title>
	<link rel="stylesheet" href="Main.css">
</head>
<body>

	<div id="nav-bar-centre">
		<ul>
			<li> <a href="#">Music</a> </li>
			<li> <a href="#">Artists</a> </li>
			<li> <a href="#">Albums</a> </li>
			<li> <a href="#">About</a> </li>
		</ul>
	</div>

	<br>

	<h2 style="margin-left: 5%"> New Albums </h2>

	<div id="line"> </div>
<div id="rowcontainer">
	<div id="musiccontainer">
		<img src="albumcover.jpg">
		<p> Album Name </p>
	</div>
	<div id="musiccontainer">
		<img src="albumcover.jpg">
		<p> Album Name </p>
	</div>
	<div id="musiccontainer">
		<img src="albumcover.jpg">
		<p> Album Name </p>
	</div>
	<div id="musiccontainer">
		<img src="albumcover.jpg">
		<p> Album Name </p>
	</div>
	<div id="musiccontainer">
		<img src="albumcover.jpg">
		<p> Album Name </p>
	</div>
	<div id="musiccontainer">
		<img src="albumcover.jpg">
		<p> Album Name </p>
	</div>
	<div id="musiccontainer">
		<img src="albumcover.jpg">
		<p> Album Name </p>
	</div>
</div>


<?php

                          while ($row = mysqli_fetch_assoc($result1))
                          {
                               echo '
                               <tr>
                                    <td>'.$row["staffID"].'</td>
                                    <td>'.$row["hotellocation"].'</td>
                                    <td>'.$row["jobname"].'</td>
                                    <td>'.$row["stafffirstname"].'</td>
                                    <td>'.$row["stafflastname"].'</td>
                                    <td>'.$row["staffemail"].'</td>
                                    <td>'.$row["staffphone"].'</td>
                                    <td>'.$row["datehired"].'</td>
                                    <td>
                                    <a href="manipulate.php?staff='.$row["staffID"].'"> Edit </a>
                                    &nbsp;
                                    <a href="?remove_staff='.$row["staffID"].'" onclick="return confirm(\'Are you sure you wish to proceed?\')"> Delete </a>
                                    </td>
                               </tr>
                               ';
                          }
                          ?>

</body>
</html>