<!DOCTYPE html>
<html>
<?php include('connect.php'); ?>

        <?php $query = ("SELECT * FROM songs WHERE ArtistID='1'");
        $result = mysqli_query($db, $query);
        ?> 



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
</head>

<body style="background-color: #ededed; margin: 20px;">

<?php

                          while ($row = mysqli_fetch_assoc($result))
                          {
                               echo '
                               <div id="musiccontainer">
                                    
                                     <li style="float:left; color: #fff; list-style:none;">'.$row["TrackName"].'</li>
                                     
                                    <audio class="musicplayer" controls controlsList="nodownload" style="width:100%;"> <source src="music/'.$row['SongID'].'.mp3" type="audio/mpeg"> </audio>
                               </div>
                               ';
                          }
                          ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>
</html>

