<html>
    <head>
 
  <title> Learn how to Adobe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
          <style>
              
.navbar {
    margin-bottom: 0;
    background-color: rgb(255, 82, 73);
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: rgb(255, 82, 73) !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
                     
  .jumbotron {
      background-color:rgb(255, 82, 73);
      color: black;
      text-align:center;
      padding-bottom: px;
      
      
  }
              
              .container-fluid {
      padding: 60px 80px;
  }
              
              .container-fluid1 {
      padding: 60px 80px;
              
  }
              
.row {
          position:relative;
          max-width:100%;
          align-content: center;
              }
              
iframe {
           position:relative;
           padding:20px; 
           margin:10px;
              }
              
.container-fluid {
            padding:20px;      
              }              

  .bg-grey {
      background-color:lightgray;
  }
              
  .logo {
      font-size: 200px;
      
  }
               .logo-small {
      color: rgb(255, 82, 73);
      font-size: 50px;
  }
  .logo {
      color: rgb(255, 82, 73);
      font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  .panel {
    border: 1px solid rgb(255, 82, 73); 
    border-radius:0;
    transition: box-shadow 0.5s;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}

.panel-footer .btn:hover {
    border: 1px solid rgb(255, 82, 73);
    background-color: #fff !important;
    color: #f4511e;
}

.panel-heading {
    color: #fff !important;
    background-color: rgb(255, 82, 73) !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}

.panel-footer {
    background-color: #fff !important;
}

.panel-footer h3 {
    font-size: 32px;
}

.panel-footer h4 {
    color: #aaa;
    font-size: 14px;
}

.panel-footer .btn {
    margin: 15px 0;
    background-color: rgb(255, 82, 73);
    color: #fff;
}
              #button {
                  color: black;
              }
       
  </style>

        
        
        <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     <!-- navigation bar when pressed takes you to the selected page by automatically scrolling down -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About</a></li>
        <li><a href="#photoshop">Photoshop</a></li>
        <li><a href="#AfterEffects">AfterEffects</a></li>
        <li><a href="#DreamWeaver">DreamWeaver</a></li>
        <li><a href="#price">Price</a></li>
        
      </ul>
    </div>
  </div>
</nav>
        <br>
        <br>
         <!-- header of the website including the search button which takes user to another page where all the videos with the same title  searched for are exported from API  -->       
        <div class="jumbotron text-center">
  <h1>Learn how to Adobe</h1> 
  <p>We specialise in Adobe cloud tutorials</p> 

        <br>
            
        <form method="post" action="results.php">
        
            <input type="text" name="search" id ="search" placeholder="Search for tutorials">
            <button type="submit">Search</button>
        </form>
            
     </div>
        <!-- a row created explaining what is Adobe creative cloud and why this website is created -->
         <div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Adobe</h2>
      <p>Adobe Creative Cloud is a set of applications and services from Adobe Systems that gives subscribers access to a collection of software used for graphic design, video editing, web development, photography, along with a set of mobile applications and also some optional cloud services.</p>      
      
<!-- button that allows users to find out more about Adobe creative cloud by the use of href="...." the original website of adobe can be linked as this website works with adobe -->
        
        <a id="button" href="https://www.adobe.com/uk" ><button>Find out more</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid1 bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>What we do </h2>
            
      <p>Our mission is to provide user with guidnace on how to use the products that are created by Adobe Cloud. By working with the creative cloud we try to make their peoples lifes easier by creating a page where they can search anything they want to know about Photoshop, After effects and Dreamweaver</p>
    </div>
  </div>
</div>

 <!-- Container (Photoshop videos section where videos taken directly from youtube are taken by taking the <iframe> of the video from Youtube) -->
    
<div  id="photoshop" class="container-fluid text-center">
    
<img src="photoshop.png" width="100" height="100">
  <h2>Photoshop</h2>
    <h4> Adobe Photoshop is the predominant photo editing and management software on the market. Its uses range from the full-featured editing of large batches of photos to creating intricate digital paintings and drawings that impersonate those done by hand.</h4>
  
  <br>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    
        
        <iframe width="300" height="200" src="https://www.youtube.com/embed/pFyOznL9UvA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
   
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/XnzGFtUevts" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
    
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      
      <iframe width="300" height="200" src="https://www.youtube.com/embed/WGMDXOr4LmI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
      
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/SlKt3vY1Tlw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
     
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/NSJHup4R9sE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
    
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/7ZlXagXwcn4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>

    </div>
      <br>
      <br>

  </div>
    <!-- A search button created once again in order to allow users to directly search for tutorials of adobe products such as photoshop after effects and dreamweaver  -->
          <form method="post" action="results.php">
        
            <input type="text" name="search" id ="search" placeholder="Search for tutorials">
            <button type="submit">Search</button>
        </form>
    
</div>
<!-- Container (After effect videos section where videos taken directly from youtube are taken by taking the <iframe> of the video from Youtube) -->
        <div id="AfterEffects" class="container-fluid1 text-center bg-grey">
            <img src="aftereffects.png" width="100" height="100">
  <h2>After effects </h2>
            <h4>Adobe After Effects is a digital visual effects, motion graphics, and compositing application developed by Adobe Systems and used in the post-production process of film making and television production. Among other things, After Effects can be used for keying, tracking, compositing and animation. It also functions as a very basic non-linear editor, audio editor and media transcoder.</h4>
  
  <br>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        
       <iframe width="300" height="200" src="https://www.youtube.com/embed/6tR3fpv4Aco" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
    
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/MA2kVwJPBkg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
     
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
   <iframe width="300" height="200" src="https://www.youtube.com/embed/Xd_gbUNjjn8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
     <iframe width="300" height="200" src="https://www.youtube.com/embed/aeY91ZCPpes" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
     
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
   <iframe width="300" height="200" src="https://www.youtube.com/embed/aeY91ZCPpes" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/5PpE-R6s8NA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
      
    </div>
      <br>
      <form method="post" action="results.php">
        <!-- a search bar once again created for quicker search option -->
            <input type="text" name="search" id ="search" placeholder="Search for tutorials">
            <button type="submit">Search</button>
        </form>
  </div>
</div>
       <!-- Container (Dreamweaver videos section where videos taken directly from youtube are taken by taking the <iframe> of the video from Youtube) --> 
        <div id="DreamWeaver"class="container-fluid text-center">
            <div class="videoWrapper">
                <img src="AdobeDreamweaverIcon.png" width="100" height="100">
  <h2>DreamWeaver </h2>
                <h4>Adobe Dreamweaver is a software program for designing web pages, essentially a more fully featured HTML web and programming editor. The program provides a what-you-see-is-what-you-get (WYSIWYG) interface for users to create and edit web pages in a more user-friendly environment.</h4>
  
  <br>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        
       <iframe width="300" height="200" src="https://www.youtube.com/embed/ORV1HOSgv2Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
   
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <iframe width="300" height="200" src="https://www.youtube.com/embed/D-5xpY4zH2c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
     
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
   <iframe width="300" height="200" src="https://www.youtube.com/embed/fwAIoDgH4mw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
      
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <iframe width="300" height="200" src="https://www.youtube.com/embed/WEjRf43giII" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
     
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
   <iframe width="300" height="200" src="https://www.youtube.com/embed/740kEwoRPKk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
     
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/jRz3l8YIXEE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen= ""></iframe>
      
    </div>
      <br>
      <form method="post" action="results.php">
        
            <input type="text" name="search" id ="search" placeholder="Search for tutorials">
            <button type="submit">Search</button>
        </form>
                </div>
  </div>
            <br>
          <!--Container (Pricing Section- information taken from the original Adobe site about the price plans that user can pay for in order to use the products each plan underneath contains a button which when pressed takes them to the page on Adobe creative cloud which shows the same price palans and will allow  user to purchase the desired program this is done by creating the button and connectint the the site using <a href>) -->
<div id="price" class="container-fluid bg-grey">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose the package that is suitable for you </h4>
  </div>
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>Photoshop</h3>
        </div>
      <div class="panel-body">
          <p><strong>Photography package</strong></p>
          <p>- Lightroom CC</p>
          <p>- Lightroom Classic CC</p>
          <p>- Photoshop CC</p>
          <p>- 20GB of cloud storage</p>
        </div>
        <div class="panel-footer">
          <h3>£19.97</h3>
          <h4>per month</h4>
            <a href="https://www.adobe.com/uk/creativecloud/plans.html?promoid=P3KMQYMW&mv=other"><button class="btn btn-lg">Sign Up</button>  </a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>After Effects</h3>
        </div>
        <div class="panel-body">
          <p><strong>Video editing package</strong> </p>
          <p>- Latest version of Aftereffect</p>
          <p>- Includes 100GB </p>
          <p>- Your own portfolio website</p>
          <p>- Premium fonts </p>
        </div>
        <div class="panel-footer">
          <h3>£19.97</h3>
          <h4>per month</h4>
            <a href="https://www.adobe.com/uk/creativecloud/plans.html?promoid=P3KMQYMW&mv=other"><button class="btn btn-lg">Sign Up</button> </a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>Dreamweaver</h3>
        </div>
        <div class="panel-body">
          <p><strong>Web Design package</strong></p>
          <p>- Latest verison of Dreamweaver</p>
          <p>- Includes 100GB </p>
          <p>- Your own portfolio website</p>
          <p>- Premium fonts </p>
        </div>
        <div class="panel-footer">
          <h3>£19.97</h3>
          <h4>per month</h4>
            <a href="https://www.adobe.com/uk/creativecloud/plans.html?promoid=P3KMQYMW&mv=other"><button class="btn btn-lg">Sign Up</button> </a>
            
          </div> 
        </div>
        </div>
      </div> 
      </div>
    <footer class="container-fluid text-center">
  <a href="#about" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright © 2018 Learn how to Adobe </p>
</footer>
    </div>

            
      
        
  


    </body>
</html>
