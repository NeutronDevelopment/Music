<?php include('connect.php'); ?>


        <?php $query = ("SELECT * FROM albums");
        $result = mysqli_query($db, $query);
        ?> 

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

                          while ($row = mysqli_fetch_assoc($result))
                          {
                               echo '
                               <div id="musiccontainer">
                               		<img>'.$row["albumimage"].'</img>
                                    <p>'.$row["albumname"].'</p>
                               </div>
                               ';
                          }
                          ?>

</body>
</html>