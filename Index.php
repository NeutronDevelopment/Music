<?php include('connect.php'); ?>


        <?php $query = ("SELECT * FROM songs");
        $result = mysqli_query($db, $query);
        ?> 



            <?php $query = ("SELECT songs.SongID, songs.TrackName, songs.AlbumName, songs.Art, artist.ArtistName, artist.ArtistID
              FROM songs
              INNER JOIN artist
              ON songs.ArtistID=artist.ArtistID;");
            $result = mysqli_query($db, $query);
            ?>



<!DOCTYPE html>
<html>
<head>
	<title>Music</title>
	<link rel="stylesheet" href="Main.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    
  <div class="w3-container w3-black w3-center w3-allerta" style="height: 125px; margin:0;">
  <p class="w3-xxxlarge">Track Rater</p>
    </div>

</head>
    
<body>

</head>
<body style="background-color: #1c1c1c;">

	<div id="nav-bar-centre">
		<ul>
			
			<div id="line"> </div>
			<li> <a href="music.php">Tracks</a> </li>
			<li> <a href="Index.php">Ratings</a> </li>
			<li> <a href="#">About us</a> </li>
			<div id="line"> </div>
		</ul>
	</div>

	<br>

	<h2 style="margin-left: 5%; color: #ffffff;"> Listen and rate </h2>

	<div id="line2"> </div>

	<div id="container"> 

<?php

                          while ($row = mysqli_fetch_assoc($result))
                          {
                               echo '
                               <div id="musiccontainer">

                              		<img style="border-radius:10px; margin-bottom:5px;" src="images/'.$row['Art'].' "> </img>
                              		
                                    <audio class="musicplayer" controls controlsList="nodownload" style="width:100%;"> <source src="music/'.$row['SongID'].'.mp3" type="audio/mpeg"> </audio>
                                     <li style="float:left; color: #fff; list-style:none;">'.$row["ArtistName"].'</li>
                                     <br>
                                     <li style="float:left; color: #fff; list-style:none;">'.$row["TrackName"].'</li>
                                     
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

