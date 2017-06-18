<!DOCTYPE html>
<html> 
<head>
   <link rel="stylesheet" type="text/css" href="http://localhost:3030/webpk/public/roomclinic.css">
   <link rel="stylesheet" type="text/css" href="{{Asset('/asset/css/bootstrap.css')}}">
   <link rel="stylesheet" type="text/css" href="{{Asset('/asset/css/bootstrap-theme.css')}}">

   <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
   <script type="text/javascript" src="{{Asset('/asset/js/jquery/jquery.validate.js')}}"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phòng Khám Hai</title>
   <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
</head>

<body class="container-fluid" ng-app="myApp" ng-controller="MainCtrl" style="background-color: #f5f5f5;">
        <!-- Modal -->
<div class="body">
<!-- slide -->
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="http://medelab.vn/media/10284/V%C3%AC-Sao-N%C3%AAn-Ch%E1%BB%8Dn-PK-Medelab.jpg">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTZhKf4MUHFNpIyyI4nYlcr8HBvFa6gKfA4QqQGVqnYrdprju97" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTZhKf4MUHFNpIyyI4nYlcr8HBvFa6gKfA4QqQGVqnYrdprju97" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTZhKf4MUHFNpIyyI4nYlcr8HBvFa6gKfA4QqQGVqnYrdprju97" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<script type="text/javascript">
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>


<!-- end slide -->
 <!-- dang nhap -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đăng nhập</h4>
      </div>
      <div class="modal-body">
      <!-- FOMR DANG NHAP -->
          <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Password:</label>
                  <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
        </form>
   <!-- END FOMR DANG NHAP -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end Modal --> 

<!-- <div >

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
 <!--<div class="image-cover">
 <img class="img-responsive" width="100%" height="160px" src="" >
 </div>-->

 <!-- Menu -->
<header>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

    <div class="container">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">

          <span class="sr-only">Toggle navigation</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

        </button>

      </div>

       <div class="collapse navbar-collapse" id="collapse"> <!--class="collapse navbar-collapse" sẽ co lại theo mô hình mobile -->

        <ul class="nav navbar-nav navbar-left"> <!--class="navbar-brand" menu sẽ co kích thước theo từng trình duyệt -->

          <li  class="active"><a href=""><span class="glyphicon glyphicon-home"></span>Trang chủ</a></li>
          <li class=""><a href="">Giới thiệu</a></li>
          <li class=""><a href="">Bài viết</a></li>
          <li class=""><a href="">Phòng khám</a></li>
          <li class=""><a href=""><span class="glyphicon glyphicon-envelope"></span>Liên hệ</a></li>
          <!--<li class="dropdown">
                                <a data-toggle="dropdown" href="">Tài khoản<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Thông tin</a></li>
                                    <li><a href="#">Đổi mật khẩu</a></li>
                                    <div class="divider"></div>
                                    <li><a href="#">Thoát</a></li>
                                </ul>
            
          </li>-->
          
 
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
                           
                         
                           <li class="" data-toggle="modal" data-target="#myModal" title="Click để đăng nhập"><span class="glyphicon glyphicon-user"></span>Đăng nhập</li> 
                           <!-- <li class="dropdown">
                                <a data-toggle="dropdown" href="">Tài khoản<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Thông tin</a></li>
                                    <li><a href="#">Đổi mật khẩu</a></li>
                                    <div class="divider"></div>
                                    <li><a href="#">Thoát</a></li>
                                </ul>
                            </li>-->
                        </ul>
      </div>
  

    </div>

  </nav>

</header>


 <!-- Trigger the modal with a button -->

<!-- jumbotron -->
 <div class="row jumbotron">
   <div class="col-md-9">
   <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
   </div>
   <div class="col-md-3">
   <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
   </div>
 </div>
 <!-- end jumbotron -->
 <div class="clears"></div>


 <div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(14.811283, 108.953395);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:15,
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
<!-- footer --> 
 <div class="footer">
   <div class="row">
   <div class="col-md-3">
    
   </div>
   <div class="col-md-3">     
     <ul>
    <li><img src="images/rss.png" alt="rss" /></li>
    <li><img src="images/twitter.png" alt="twitter" /></li>
    <li><img src="images/facebook.png" alt="facebook" /></li>
    <li><img src="images/myspace.png" alt="myspace" /></li>
    <li><img src="images/flick.png" alt="flick" /></li>
    <li><img src="images/linkin.png" alt="linkin" /></li>
    </ul>
   </div>
   <div class="col-md-3">
      <ul>
       <li>Phone: (+84)964.634.357</li>
       <li>Email: phongkhamnhi@gmail.com</li>
       <li>Địa chỉ: 432/8G.Dương Bá Trạc.Q8.TPHCM</li>       
     </ul>
   </div>
   </div>
   </div>
<!-- end footer -->    
<!-- copyright -->
 
 <div class="copyright"><span>©2016 hệ thống phòng khám chuyên nghiệp nhất việt nam :))<a href="http://www.khamonline.esy.es" title="BHNet">Book Heart Nét</a></span> </div>
<!-- end copyright --> 
 </div>

</body>
</html>