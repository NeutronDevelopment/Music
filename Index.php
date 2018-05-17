<?php include('connect.php'); ?>


        <?php $query = ("SELECT * FROM album");
        $result = mysqli_query($db, $query);
        ?> 



            <?php $query = ("SELECT album.SongID, album.TrackName, album.songfile, album.AlbumName, album.Art, artist.ArtistName, artist.ArtistID
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
			<h3> Track Rater </h3>
			<div id="line"> </div>
			<li> <a href="#">Music</a> </li>
			<li> <a href="#">Artists</a> </li>
			<li> <a href="#">About us</a> </li>
			<div id="line"> </div>
		</ul>
	</div>

	<br>

	<h2 style="margin-left: 5%"> Listen and rate </h2>

	<div id="line2"> </div>

	<div id="container"> 

<?php

                          while ($row = mysqli_fetch_assoc($result))
                          {
                               echo '
                               <div id="musiccontainer">

                               		<img src="images/'.$row['Art'].' "> </img>
<<<<<<< HEAD
                                    <audio controls style="width:100%;"> <source src="'.$row['songfile'].'" type="audio/mpeg"> </audio>
                                     <p style="float:left;">'.$row["ArtistName"].' - '.$row["AlbumName"].'</p>

=======
                                    <audio controls style="width:100%;"> <source src="music/'.$row['songfile'].'" type="audio/mpeg"> </audio>
                                     <p style="float:left;">'.$row["ArtistName"].'</p>
                                     <br>
>>>>>>> 883594d3d76a5bca33dfe01bdc2b7b0993c8e53d
                                     <br>
                                     <br>
                                     
                                     <p style="float:left; font-weight:100;">'.$row["TrackName"].'</p>
                                     
                               </div>
                               ';
                          }
                          ?>




    </div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</body>
</html>