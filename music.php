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


  <li style="float: right; list-style: none;" > <input type="text" class="search form-control" placeholder="Search" style="width: 100%; float: right;"> </li>
  <table class="table table-hover table-bordered results" style=" background-color: #ffffff;">
  <span class="counter pull-right"></span>
                            <thead>
                               <tr>
                                    <td> <p> Song Name </p> </td>
                                    <td> <p> Artist </p> </td>
                                    <td> <p> Player </p> </td>
                               </tr>
                          </thead>
                          <?php

                          while ($row = mysqli_fetch_assoc($result))
                          {
                               echo '
                               <tr>
                                    <td>'.$row["TrackName"].'</td>
                                    <td>'.$row["ArtistName"].'</td>
                                    <td><audio class="musicplayer" controls controlsList="nodownload" style="width:100%;"> <source src="music/'.$row['SongID'].'.mp3" type="audio/mpeg"> </audio></td>
                               </tr>
                               ';
                          }
                          ?>
                </table>




    </div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<script src="assets/js/Table-with-search.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


