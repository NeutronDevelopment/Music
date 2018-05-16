<?php include('connect.php'); ?>


        <?php $query = ("SELECT * FROM album");
        $result = mysqli_query($db, $query);
        ?> 



            <?php $query = ("SELECT album.AlbumID, album.Name, album.Art, artist.ArtistName, artist.ArtistID
              FROM album
              INNER JOIN artist
              ON album.ArtistID=artist.ArtistID;");
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

<?php

                          while ($row = mysqli_fetch_assoc($result))
                          {
                               echo '
                               <div id="musiccontainer">

                               		<img src="images/'.$row['Art'].' "> </img>
                                    
                                    <p>'.$row["ArtistName"].'</p>
                                    <p>'.$row["Name"].'</p>

                               </div>
                               ';
                          }
                          ?>

</body>
</html>