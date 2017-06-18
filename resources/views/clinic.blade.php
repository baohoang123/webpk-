@extends('index')
@section('content')
<div class="content-clinics">
<div>
 <script>
  (function() {
    var cx = '009150043003156410776:qnkxwsdhnew';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<!--
  <form action="http://www.google.com/search" method="get" target="_blank"><div style="border: 0px solid #ccc;padding: 4px; width: 20em;">
<table border="0" cellpadding="0">
<tbody><tr><td>
<input style="width: 120px;"maxlength="255" value="" name="q" size="25" type="text"/>
<input value="Tìm Kiếm" type="submit"/></td></tr>
<tr><td align="left">
<input checked="checked" value="khamonline.esy.es" name="sitesearch" type="checkbox"/> Chỉ tìm kiếm ở Web này</td></tr></tbody></table></div></form>-->
<h3><span class="title"><span class="glyphicon glyphicon-tags"></span>Mục chuyên khoa</span></h3>
</div>
<div class="list-clinic">
 <gcse:search></gcse:search>
</div>
<div class="clears"></div>
<div class="ti-clinic">
 @foreach ($arrdepart as $keydepart)
<!-- khoa nhi -->
<div class="children-clinic">
 <a href="./page-children-clinic">
 <div class="statistic">
 {{$keydepart->depart_name}}<span class="glyphicon glyphicon-hand-left"></span> <br />
 <span style="font-size: 10px">nhấn vô đây đểm xem tất cả phòng khám</span>
 </div></a>
 <div class="content-children-clinic content-clinic-forum">
 <br />
 <div>
 
 <?php foreach ($arrnhikhoa as $key => $value): ?>
   

 @if($keydepart->depart_code == $value->typeclinic)
 <div class="right-clinic">
 <span class="glyphicon glyphicon-tree-deciduous"></span>
  {!!$value ->clinicname!!} 
 

  <div>
  <strong>Địa chỉ:</strong> {!!$value ->clinic_id!!} 
  </div>
  <div>
  <strong>Giới thiệu: </strong> {!!$value ->typeclinic!!} 
  </div>
  </div>
  

  
  <div class="left-clinic">
  <div class="left-clinic-button ">
  <a href="./room/{{$value ->clinic_id}}"><input type="button" class="btn btn-default btn-xs" name="" value="Xem phòng khám" width="10%"></a>
  </div>
  <div class="right-clinic-button">
  <input type="button" class="btn btn-default btn-xs" name="" value="Đăng ký khám">
  </div>
   <div class="clears"></div>
  </div>
@endif
<div class="clears"></div>
  
   <?php endforeach ?>
 <div class="clears"></div>
 </div>
  
 </div>
</div>
 @endforeach 
















<div>
    <ul class="pagination pagination-sm">
    @if($arrdepart->currentPage() != 1)
    <li><a href="{!! str_replace('/?','?', $arrdepart->url($arrdepart->currentPage() - 1))!!}" style="color:#111111;">Back</a></li>
    @endif
     @for($i = 1; $i <= $arrdepart->lastPage(); $i++)
    <li class="{!! ($arrdepart->currentPage() == $i) ? 'active' : ''!!}"><a href="{!! str_replace('/?','?', $arrdepart->url($i))!!}" style="color:#111111;">{{$i}}</a></li>
       
     @endfor
     @if($arrdepart->currentPage() != $arrdepart->lastPage())
    <li><a href="{!! str_replace('/?','?', $arrdepart->url($arrdepart->currentPage() + 1))!!}" style="color:#111111;">Next</a></li>
     @endif
   </ul>
   </div>
</div>
</div>
@stop