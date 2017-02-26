<footer class="footer">
	<div class="foot_wrap">
		<dl>
			<dt>〒658-0081</dt>
			<dd>兵庫県神戸市東灘区田中町3-4-5-101</dd>
			<dd>TEL:<span data-action="call" data-tel="0784147274">078-414-7274</span></dd>
			<dd>FAX:<span>078-414-7294</span></dd>
			<dd>【営業時間】11:00～19:00</dd>
			<dd>【定休日】毎週水曜日</dd>
			<dd><span>古物商：大阪府公安委員会許可 第 621120142182</span></dd>
		</dl>
		<ul class="footer_nav">
			<li><a href="http://torami.jp/">ホーム</a></li>
			<li><a href="http://torami.jp/brand/">ブランド買取</a></li>
			<li><a href="http://torami.jp/gold/">貴金属買取</a></li>
			<li><a href="http://torami.jp/juery/">ジュエリー買取</a></li>
			<li><a href="http://torami.jp/takuhai/">宅配買取</a></li>
			<li><a href="http://torami.jp/syuttyou/">出張買取</a></li>
			<li><a href="http://torami.jp/contact/">各種お問合せ</a></li>
			<li><a href="http://torami.jp/line/">LIME無料査定♪</a></li>
		</ul>
		<p class="footer_map anime"><img src="<?php bloginfo('template_url'); ?>/img/map.svg" alt="map"></p>
		<address>Copyright © 2016 <a style="color:#D5B841;" href="http://life-thewild.com/">WILD</a> , All rights reserved.</address>
	</div><!--foot_wrap-->
</footer><!--footer-->
<?php wp_footer(); ?>
<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
<script src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAGai3t_kh0EXzozufnIblh6L5QT3Yk3RI"></script>
<script>
function initialize() {
  var latlng = new google.maps.LatLng(34.722182, 135.272001);
  var myOptions = {
    zoom: 18,/*拡大比率*/
    center: latlng,/*表示枠内の中心点*/
    mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] },/*表示タイプの指定*/
		scrollwheel: false
  };
  var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);

	/*アイコン設定▼*/
   var icon = new google.maps.MarkerImage('<?php bloginfo('template_url'); ?>/img/ico.png',
     new google.maps.Size(100,72),/*アイコンサイズ設定*/
     new google.maps.Point(0,0),/*アイコン位置設定*/
		 new google.maps.Point(60,70) // anchor
     );
   var markerOptions = {
     position: latlng,
     map: map,
     icon: icon,
     title: 'TORAMI'
   };
   var marker = new google.maps.Marker(markerOptions);
 　/*アイコン設定ここまで▲*/

  /*取得スタイルの貼り付け*/
  var styleOptions = [
		  {
		    "stylers": [
		      { "hue": "#00c3ff" },
		      { "saturation": -100 },
		      { "weight": 0.1 }
		    ]
		  }
		];
  var styledMapOptions = { name: 'TORAMI' }
  var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
  map.mapTypes.set('sample', sampleType);
  map.setMapTypeId('sample');
}
</script>
<script>
	$(function() {
	    if (!isPhone())
	        return;
	    $('span[data-action=call]').each(function() {
	        var $ele = $(this);
	        $ele.wrap('<a href="tel:' + $ele.data('tel') + '"></a>');
	    });
	});
	function isPhone() {
	    return (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0);
	}
</script>
<script>
$('.anime');
$(window).scroll(function(){
 var windowHeight = $(window).height(),
     topWindow = $(window).scrollTop();
 $('.anime').each(function(){
  var targetPosition = $(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 200){
   $(this).addClass("fadeIn");
  }
 });
});
</script>
</body>
</html>
