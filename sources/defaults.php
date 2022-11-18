<?php

	$page_index=$deviceType=='phone' ? 20 : 20;

	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$logo = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logo_mobile=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo_mobile'));

	$logo_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo_footer'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$socical = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('mangxahoi'));

	$introBottom = $db->rawQuery("select id , type , photo from #_baiviet where hienthi=1 and type=?",array('album'));

	$bg_footer =$db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_footer'));

	$bg_dichvu =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg-dichvu'));

	$bg_tintuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_tintuc'));

	$bg_top =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_tourgt'));

	$title_tour =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('title_tour'));

	$banner =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('banner'));

	$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('chinh-sach'));

	// index

	$hotline= $db->rawQuery("select ten_$lang as ten,phone from #_map where hienthi=1 and type=? order by stt asc",array('hotline'));

	$footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('footer'));

	$maps = $db->rawQuery("select id,ten_$lang, diachi_$lang, phone, email,website,iframe_map from #_map where hienthi=1 order by stt asc,id desc limit 0,2");
	
	$service=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , mota_$lang as mota , type , photo from #_baiviet where type=? and hienthi=1 limit 0,3",array('dich-vu'));

	$service_c1=$db->rawQuery("select id, ten_$lang as ten, icon , photo ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc",array('dich-vu'));

	$tour=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , mota_$lang as mota , type , photo from #_baiviet where hienthi=1 and type=?",array('tour'));

	$tour_c1=$db->rawQuery("select id, ten_$lang as ten, photo ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc",array('tour'));

	$visao=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=? limit 0,3",array('tai-sao'));

	$news=$db->rawQuery("select id , ten_$lang as ten , ngaytao ,tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=?",array('tin-tuc'));


	//SEO TOUR
	$seotour = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array('tour'));

	//all tour
	$sqlqtourall = "SELECT COUNT(*) as `numb` from #_baiviet where type=? and hienthi=1  ";

    $counttourall = $db->rawQueryOne($sqlqtourall,array('tour'));
                            
    $totaltourall = $counttourall['numb'];
?>