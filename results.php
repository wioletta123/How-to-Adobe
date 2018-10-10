<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Learn how to Adobe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
     
        
.banner {
    background-color: rgb(255, 82, 73);              
        }        

.navbar a {
      float:right;
       color: #ffffff;
       padding-top:20px;
        padding-right:50px;
        }        
        
  .jumbotron {
      background-color: rgb(255, 82, 73);
      color: black;
      margin:0;
      padding-top: 0px;
      padding-bottom: 50px;
  }

.phpinfo { 
        padding: 30px;
        }       
        
.phpinfo h1 {
         text-align: center; 
         font-family: "Arial, Helvetica, sans-serif;
        }        
        
        .phpinfo iframe {
            position:relative;
            width:auto;
            left:50%;
            transform: translate(-50%);
        }    
        
       
  </style>       
        
    </head>
 <body>
    <!-- php this connects the search buton with the api request to youtube -->
<?php

$search = $_POST['search'];
   // the below code connects to the website using the url and the API key taken from the google devlopers consoule by the use of this code the desired data can be accessed in this case the video with the id that is being searched is displayed//

$url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=25&key=AIzaSyCY9kvpCPESzsdjLKZ_QJfuT4Sg-NnKhp0&q='.$search;

$data =file_get_contents($url);
// using data from json using php//
$data = json_decode($data);

//calls the data abd items from youtube//
$items = $data->items;


//    echo 'https://www.youtube.com/watch?v='.$item.'<br>';

?>         
<div class="banner">  
 <div class="navbar"> 
     <!-- button taken users back to the index (home) page  -->
    <a class="navbar-brand" class="glyphicon glyphicon-home" href="index.php">HOME</a>
</div> 
<div class="jumbotron text-center">
    <div class="homebtn">

    </div>
  <h1>Learn how to Adobe</h1> 
  <p>search for more tutorials</p> 
 <!-- search button created on the result page in order for users to further search for more tutorials without going back to the home page  -->
        
                <form method="post" action="results.php">
        
            <input type="text" name="search" id ="search">
            <button type="submit">Search</button>
        </form>
</div> 
</div>
     
<div class="phpinfo">   
    <!-- php data presening the videos the way youtube does by entering the item the id title and video -->
      <?php  foreach ($items as $item){
    $ID = $item->id->videoId;
    $title = $item->snippet->title;?>
        
        <h1><?php echo $title ?></h1>
        
        <iframe height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $ID ?>">
        </iframe>

       <?php 
        }
?>
</div>
  
        
    </body>
</html>
