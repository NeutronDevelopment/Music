<?php include('connect.php'); ?>


        <?php $query = ("SELECT * FROM album");
        $result = mysqli_query($db, $query);
        ?> 



            <?php $query = ("SELECT album.SongID, album.TrackName, album.AlbumName, album.Art, artist.ArtistName, artist.ArtistID
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

</head>
<body>

<div class="w3-container w3-black w3-center w3-allerta">
  <p class="w3-xxxlarge">Track Rater</p>
	<div id="nav-bar-centre">
		<ul>
			
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

                              		<img style="border-radius:10px;" src="images/'.$row['Art'].' "> </img>
                              		

                                    <audio controls controlsList="nodownload" style="width:100%; border-radius:50px;"> <source src="music/'.$row['SongID'].'.mp3" type="audio/mpeg"> </audio>
                                     <p style="float:left;">'.$row["ArtistName"].'</p>

                                     <br>
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
