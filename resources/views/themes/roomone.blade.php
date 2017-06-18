<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="roomclinic.css">
   <link rel="stylesheet" type="text/css" href="{{Asset('/asset/css/bootstrap.css')}}">
   <link rel="stylesheet" type="text/css" href="{{Asset('/asset/css/bootstrap-theme.css')}}">
   <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
   <script type="text/javascript" src="{{Asset('/asset/js/jquery/jquery.validate.js')}}"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   	<title>Phòng khám một</title>
     <style>
    .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
      }
      .carousel-indicators li {
      border-color: #f4511e;
       }
      .carousel-indicators li.active {
      background-color: #f4511e;
      }
     .item {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px;
      border: 0px solid #111111;
  }
  </style>
</head>
<body class="container-fluid" ng-app="myApp" ng-controller="MainCtrl">
  <div class="body">
  <header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Trang Chủ</a></li>
        <li><a href="#services">Giới thiệu</a></li>
        <li><a href="#portfolio">Bài viết</a></li>
        <li><a href="#pricing">Phòng khám</a></li>
        <li><a href="#contact">Liên hệ</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>

  <!--<div >

  First Name: <input type="text" ng-model="firstName"><br>
  Last Name: <input type="text" ng-model="lastName"><br>
  <br>
  Full Name: <span ng-bind='fullName()'></span>

  </div>

  <script>
  var app = angular.module('myApp', []);
      app.controller('personCtrl', function($scope) {
      $scope.firstName = "John";
      $scope.lastName = "Doe";
      $scope.fullName = function() {
          return $scope.firstName + " " + $scope.lastName;
      };
  });
  </script>-->
  <div class="slider">
   <img class="img-responsive" src="http://medelab.vn/media/10284/V%C3%AC-Sao-N%C3%AAn-Ch%E1%BB%8Dn-PK-Medelab.jpg">
  </div>
 <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--
 <div class="content-room-1">
  <div class="banner">
   <img src="">
   abdđ
  </div>
  <div class="body-content">
   <div class="right">
     right
   </div>
   <div class="left">
     left
   </div>
  </div>
 </div>-->
 <!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
 <!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-4">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>    
    </div>
    <div class="col-sm-2">
    <ul>
    <li>Mạng xã hội của chúng tôi:</li>
    <li><img src="images/rss.png" alt="rss" /></li>
    <li><img src="images/twitter.png" alt="twitter" /></li>
    <li><img src="images/facebook.png" alt="facebook" /></li>
    <li><img src="images/myspace.png" alt="myspace" /></li>
    <li><img src="images/flick.png" alt="flick" /></li>
    <li><img src="images/linkin.png" alt="linkin" /></li>
    </ul>
    </div>
    <div class="col-sm-6 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>  
    </div>
  </div>
</div>


<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

  <!--  footer -->   
 <div class="footer">
  <!-- copyright -->
 <div class="copyright"><span>©2016 hệ thống phòng khám chuyên nghiệp nhất việt nam :))<a href="http://www.khamonline.esy.es" title="BHNet">Book Heart Nét</a></span> </div>
<!-- end copyright --> 
 </div>
  <!-- end footer -->    


  </div>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>