<div class="footer">
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
		<ul>
			<li><a href="http://torami.jp/">ホーム</a></li>
			<li><a href="http://torami.jp/brand/">ブランド買取</a></li>
			<li><a href="http://torami.jp/gold/">貴金属買取</a></li>
			<li><a href="http://torami.jp/juery/">ジュエリー買取</a></li>
			<li><a href="http://torami.jp/takuhai/">宅配買取</a></li>
			<li><a href="http://torami.jp/syuttyou/">出張買取</a></li>
			<li><a href="http://torami.jp/contact/">各種お問合せ</a></li>
			<li><a href="http://torami.jp/line/">LIME無料査定♪</a></li>
		</ul>
		<address>Copyright © 2016 TORAMI , All rights reserved.</address>
	</div><!--foot_wrap-->
</div><!--footer-->
</div><!--all-->

<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
<script src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/slick.min.js"></script>
<script>
$(function() {
	$('#slide').slick({
	accessibility:false,autoplay:true,dots: true,infinite: true,
	autoplaySpeed: 3500,speed: 850,
	});
});
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
<script type="text/javascript">
	window._pt_sp_2 = [];
	_pt_sp_2.push('setAccount,29643e6b');
	var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	(function() {
		var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
		atag.src = _protocol + 'js.ptengine.jp/pta.js';
		var stag = document.createElement('script'); stag.type = 'text/javascript'; stag.async = true;
		stag.src = _protocol + 'js.ptengine.jp/pts.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(atag, s);s.parentNode.insertBefore(stag, s);
	})();
</script>
</body>
</html>
