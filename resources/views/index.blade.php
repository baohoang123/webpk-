<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="./webpk.css">
<!-- chen bootstrap, jquery -->
<link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{Asset('asset/css/bootstrap-theme.css')}}">
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
<script type="text/javascript" src="{{Asset('asset/js/jquery/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{Asset('asset/js/angular.min.js')}}"></script>
<script type="text/javascript" src="{{Asset('asset/js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{Asset('asset/js/ckfinder/ckfinder.js')}}"></script>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Trang chủ</title>
<script type="text/javascript" src="./asset/jquery/jquery.min.js"></script>
<script type="text/javascript" src="./asset/js/ddaccordion.js"></script>
<!--  script thu nghiem  --> 
  <script type="text/javascript" src="js/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="js/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="localization/messages_vi.js"></script>
  <!-- end thu nghiem -->

<!--ajax -->

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- end ajax -->

<script type="text/javascript">


ddaccordion.init({
    headerclass: "expandable", //Shared CSS class name of headers group that are expandable
    contentclass: "categoryitems", //Shared CSS class name of contents group
    revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
    mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
    collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
    defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
    onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
    animatedefault: false, //Should contents open by default be animated into view?
    persiststate: true, //persist state of opened contents within browser session?
    toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
    togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
    animatespeed: 500, //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
    oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
        //do nothing
    },
    onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
        //do nothing
    }
})


</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>
  $(function() { 
        $(function() {  
             var pull        = $('#pull');  
               menu        = $('nav ul');  
               menuHeight  = menu.height();  
      
            $(pull).on('click', function(e) {  
                 e.preventDefault();  
               menu.slideToggle();  
            });  
        });  

        $(window).resize(function(){  
            var w = $(window).width();  
            if(w > 320 && menu.is(':hidden')) {  
               menu.removeAttr('style');  
          }  
       });    
    });  


  </script>
<style type="text/css">
.title-menu{
  height: 50px;
  width: 220px;
  border: 1px solid #111111;
}
.arrowlistmenu{
width: 220px; /*width of accordion menu*/
border: 1px solid #111111;
}
.arrowlistmenu .menuarticles{
  border: 1px solid #111111;
}

.arrowlistmenu .menuarticles .menuheader{ /*CSS class for menu headers in general (expanding or not!)*/
font: bold 14px Arial;
color: white;
background: black url() repeat-x center left;
margin-bottom: 0px; /*bottom spacing between header and rest of content*/
text-transform: uppercase;
padding: 10px 10px 10px 10px; /*header text is indented 10px*/
cursor: hand;
cursor: pointer;
height: 50px;
}

.arrowlistmenu .menuarticles .openheader{ /*CSS class to apply to expandable header when it's expanded*/
background-image: url(http://1.bp.blogspot.com/-jeGIM5duw4Q/T44KL8MhYoI/AAAAAAAAX0M/HTA4YcQE2zY/s1600/titlebar-active.png);
}

.arrowlistmenu .menuarticles ul{ /*CSS for UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
margin-bottom: 8px; /*bottom spacing between each UL and rest of content*/
}

.arrowlistmenu .menuarticles ul li{
padding-bottom: 2px; /*bottom spacing between menu items*/
}

.arrowlistmenu .menuarticles ul li a{
color: #A70303;
/*background: url(http://4.bp.blogspot.com/-qH3X6Ciy150/T44KFWiC2rI/AAAAAAAAX0E/Rgaqrw2nJd8/s1600/arrowbullet.png) no-repeat center left; /*custom bullet list image*/
display: block;
padding: 2px 0;
padding-left: 19px; /*link text is indented 19px*/
text-decoration: none;
font-weight: bold;
border-bottom: 1px solid #dadada;
font-size: 90%;
}

.arrowlistmenu .menuarticles ul li a:visited{
color: #A70303;
}

.arrowlistmenu .menuarticles ul li a:hover{ /*hover state CSS*/
color: #A70303;
background-color: #F3F3F3;
}

</style>

</head>
<body class="">
<script type="text/javascript" src="http://www.dynamicdrive.com/dynamicindex1/sdmenu/sdmenu.js"></script>
<script type="text/javascript">
window.onload = function() {
myMenu = new SDMenu("my_menu");
myMenu.init();
};
</script>

<header>

 <div class="body">
 
 
 <div class="registers">
    <span class="logo-company" >
     <img class="image-logo" src="./image/image-lo-go.jpg"  >
    </span>

         <!--<marquee style=" width:40%; font-size:40px;" >Book Heart Net</marquee>
    --> <div class="search-box">

     <div class="box-info">
    

     @if(Session::has('nameuser'))
            
            <span>Chát |</span>
            <span class="box-user" ><span class="user"><img src="./album/image/{{ Session::get('imageuser') }}" height="18" width="20">{{ Session::get('nameuser') }}</span>
            
            <div class="profile"> 
             <div class="pro-bg-profile">@if(Session::has('checkstafflogin')) <a href="./submit-staff"> @else<a href="./profile">@endif<span class="glyphicon glyphicon-user"></span>Hồ sơ cá nhân</a></div>
             <div class="pro-bg-option"><span class="glyphicon glyphicon-check"></span>Tùy chọn</div>
             <div class="pro-bg-logout">@if(Session::has('checkstafflogin')) <a href="./logout-staff"> @else<a href="./log-out">@endif<span class="glyphicon glyphicon-off"></span>Logout</a></div>
            </div>
            </span>
       @else
           <span>Chát |</span>
           <span class="box-login"><span class=""></span>Đăng nhập      
            <div class="profile"> 
             <div class="pro-bg-user"><a href="./log-in"><img src="./image/icon/user.png"><span class="key">Người sử dụng</span></a></div>
             <div class="pro-bg-doctor"><a href="./login-staff"><img src="./image/icon/doctor.png"><span class="key">Nhân viên</span></a></div>
             <!--<div><a href="./log-in">Login User</a></div>-->
            </div>
           </span>


      @endif

   </div>
   <div class="clears"></div>
   <div class="search">
   {!! Form::open(array('method'=>'GET','url' => 'http://www.google.com/cse')) !!}
   {!! Form::label('lable', 'Tìm thông tin:', array('class'=>'lable'))!!}
   <input type="hidden" name="cx" value="009150043003156410776:qnkxwsdhnew">
    <input type="hidden" name="ie" value="UTF-8">
    {!! Form::text('q','', array('class'=>'text ', 'placeholder' => 'Tìm kiếm'))!!}
   {!! Form::submit(' ', array('class'=>'search-go'))!!}
   {!! Form::close() !!}  

   </div>
   </div>
 </div>
 <div class="clears"></div>

 <div class="menu">
  <div class="menudesk">
    <ul>
    	<a href="./"><li class="menu-home-page"><span class="glyphicon glyphicon-home"></span><span>Trang chủ</span>
      
      </li> </a>
    	<a href="./introduce"><li class="menu-home-page"><span class="glyphicon glyphicon-list-alt"></span>Giới thiệu</li></a>
    	<a href="./articles"><li class="menu-home-page"><span class="glyphicon glyphicon-book"></span>Bài viết</li></a>
    	<a href="./clinics"><li class="menu-home-page"><span class="glyphicon glyphicon-plus"></span>Phòng khám</li></a>
      <li class="menu-home-page icon-guide"><a href=""><span class="glyphicon glyphicon-question-sign"></span> Hướng Dẫn Sử Dụng </a>
        <div class="hd-sudung-block">
         <div class="hd-sudung-block-left">
           <span class="top-hd-sudung">
             <a href="./conduct-createclinic"><div class="content-hd-createclinic">Tạo phòng khám <div class="menu-hd-create-clinic">Tạo phòng khám</div></div></a>
             
             <a href="./conduct-staffclinic"><div class="content-hd-staffclinic">Nhân viên phòng khám <div class="menu-hd-employer-clinic">Nhân viên phòng khám</div></div></a>

             <a href="./conduct-patientclinic"><div class="content-hd-patientclinic">Bênh nhân đăng ký<div class="menu-hd-patient-clinic">Bênh nhân đăng ký</div></div></a>
           </span>
         </div>
         <div class="hd-sudung-block-right">
          <span class="descript-top-hd">
            
             
            

             
           </span>
         </div>
         <div class="clears"></div>
         
       </div>
      </li>
    	<a href="./contact"><li class="menu-home-page"><span class="glyphicon glyphicon-phone-alt"></span>Liên hệ</li></a>
    </ul>
     </div>

<div class="arrowsidemenu">
<!--<div  id="my_menu" class="sdmenu">
<div class="collapsed">
   <span><strong style="font-size:20px">Menu</strong></span>
            <a href="./">Trang chủ</a>
            <a href="./introduce">Giới thiệu</a>
            <a href="./articles">Bài viết</a>
            <a href="./clinics">Phòng khám</a>
            <a href="./conduct-createclinic">Hướng dẫn tạo phòng khám</a>
            <a href="./conduct-staffclinic"> Hướng dẫn nhân viên phòng khám</a>
            <a href="./conduct-patientclinic">Hướng dẫn đăng ký khám</a>
            <a href="./contact">Liên hệ</a>
            

</div>

</div>-->
<!-- nếu muốn tạo thêm menu bạn chỉ cần copy đoạn code màu vàng bên trên dán vào đây -->
<nav class="clearfix">
    <a href="#" id="pull">Menu</a>
    <ul class="clearfix">
      <li><a href="#">Home</a></li>
      <li><a href="#">How-to</a></li>
      <li><a href="#">Icons</a></li>
      <li><a href="#">Design</a></li>
      <li><a href="#">Web 2.0</a></li>
      <li><a href="#">Tools</a></li>  
    </ul>
     
  </nav>
</div>

<div class="menutable">
    <ul>
      <a href="./"><li class="menu-home-page">Trang chủ</li></a>
      <a href="./introduce"><li class="menu-home-page">Giới thiệu</li></a>
      <a href="./articles"><li class="menu-home-page">Bài viết</li></a>
      <a href="./clinics"><li class="menu-home-page">Phòng khám</li></a>
      <li class="menu-home-page"><a href=""> HD Sử Dụng</a><span class="caret"></span>
          <div class="hd-sudung-block">
           <span class="top-hd-sudung">
             <a href="./conduct-createclinic"  ><div class="content-hd-createclinic">Tạo phòng khám</div></a>
             
             <a href="./conduct-staffclinic"  ><div class="content-hd-staffclinic">Nhân viên phòng khám</div></a>

             <a href="./conduct-patientclinic"  ><div class="content-hd-patientclinic">Bênh nhân đăng ký</div></a>
           </span>

         
       </div>
      </li>
      
      
      <a href="./contact"  ><li class="menu-home-page">Liên hệ</li></a>
    </ul>
</div>
 </div>
 <div class="titlepage">
  @if(Session::has('nameuser'))
  <div class="advert-clinic">
   <h1>Tham gia vào tương lai của Y TẾ</h1>
   <div class="title-advert">
   Website là một nền tảng sáng tạo cho phép các phòng khám tư vấn bệnh nhân 
   trực tuyến. Đăng ký khám chữa bệnh online, Kiếm được nhiều tiền hơn, quản lý tốt hơn thời gian của bạn và tăng 
   sự ghi nhân chuyên môn của bạn.
   </div>
   <div class="staff-hospital">
    <a href="./register-website">{!! Form::button('TẠO PHÒNG KHÁM', array('class'=>'register-website'))!!}</a>
    <a href="./clinics">{!! Form::button('ĐẶT LỊCH KHÁM', array('class'=>'register-website'))!!}</a>
  <!-- <a href="./login-doctor">{!! Form::button('Login Bác Sĩ', array('class'=>'login-doctor'))!!}</a>
   <a href="./login-staff">{!!Form::button('Login Nhân Viên', array('class'=>'login-staff'))!!}</a>-->
  </div>
 </div>
  @else
   <div class="titlepage-guide">
   <h3 style="color:#FFFFFF; text-shadow: 2px 2px 4px #000000;">Bạn Muốn?</h3>
   <div class="clears"></div>
    <div class="staff-hospital">
    <a href="./register-healing" class="button-art">
    <span class="button-one">
    <span class="title">Để đăng ký chọn chỗ và tự sắp xếp thời gian đi khám</span>
    {!! Form::button('Đăng Ký Khám', array('class'=>'register-calendar-examination btn btn-success'))!!}
    </span>
    </a>
    <a href="./create-clinic" class="button-art">
    <span class="button-two">
     <span class="title">Tạo phòng khám đơn giản cho phòng khám của bạn</span>
    {!!Form::button('Tạo Phòng Khám', array('class'=>'register-clinic btn btn-success'))!!}
    </span>
    </a>
    <a href="./manage-healing" class="button-art">
    <span class="button-three">
    <span class="title">Chức năng kiểm tra, và quản lý kết quả khám của bạn</span>
    {!!Form::button('Quản Lý Khám', array('class'=>'btn btn-success register-staff-clinic'))!!}
    </span>
    </a>
    <a href="./reference-service" class="button-art">
    <span class="button-four">
    <span class="title">Tìm hiểu thêm về dịch vụ của chúng tôi, để hiểu thêm nhiều thứ</span>
    {!!Form::button('Tham Khảo Dịch Vụ', array('class'=>'reference-service btn btn-success'))!!}
    </span>
    </a>
    </div>
    </div>
   @endif
 </div>
 <div class="image-cover">
 @if(Session::has('nameuser'))
   <img src="http://www.anhp.vn/dataimages/201501/original/images1000219_photo_5__800x600_.jpg" >
    @else
   <img src="image/Bac-si.jpg" >
 @endif
 </div>
 
 <div class="content">
 
   <div class="page">
     @yield('content')
    </div>
 </div>
  <div class="clears"></div>
 <div class="footer">
   <div class="title-footer">
   <div>
   Trung tâm phân phối dịch vụ đăng ký mở phòng khám online hiện đại nhất Việt Nam
   </div>
   <div class="">

    
      <a href="./trang-chu">Trang chủ</a>
      <a href="./gioi-thieu">Giới thiệu</a>
      <a href="./bai-viet">Bài viết</a>
      <a href="./phong-kham">Phòng khám</a>
      <a href="./lien-he">Liên hệ</a>
    
   </div>
   <div class="social-network">
      <img src="image/icon-facebook.ico" height="30" width="30">
      <img src="image/icon-skype.png" height="30" width="30">
      <img src="image/icon-google-plus.png" height="30" width="30">
      <img src="image/icon-twitter.png" height="30" width="30">
   </div>
   </div>
 </div>
  @yield('login-hospital')
 </div>
 </header>
 <footer>
   
 </footer>
 </body>
</html>