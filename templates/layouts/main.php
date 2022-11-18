<?php 

    $bg_banner = $func->OneDataPhoto("mota_$lang as mota,",'bg-slider','limit 0,1',"object");                                    // Background tin tức

    $bg_gioithieu = $func->OneDataPhoto(null,'bg_gioithieu','limit 0,1',"object");                              // Background giới thiệu

    
    $introTop = $func->AllDataPhoto("ten_$lang as ten,number,",'intro-top','limit 0,5','array');                // Lấy toàn bộ thông số giới thiệu

?>

<div class="background_top"
    style="background:url('<?= _upload_hinhanh_l.$bg_top['photo']?>') no-repeat center center/cover;">
    <section class="tourist pt110">
        <div class="container">
            <div class="row">
                <div class="col-12 item">
                    <?php if($deviceType != 'phone') {?>
                    <div class="tour_top display-flex">
                        <div class="tour_travel col-12mobile col-8 display-flex">
                            <div class="left_tourist p-relative">
                                <div class="slogan_tourist">
                                    Tourist
                                </div>
                                <div class="keywords_tourist">
                                    <?=$seotour['keywords_'.$seolang]?>
                                </div>

                            </div>
                            <div class="right_tourist title_desc_tourist">
                                <div class="title_tourist_c1 mb10">
                                    <?=$seotour['title_'.$seolang]?>
                                </div>
                                <div class="desc_tourist_c1 line-4">
                                    <?=$seotour['description_'.$seolang]?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-12mobile display-flex list_c1_tour">
                            <div class="owl-carousel p-relative col-9 owl-theme" id="owl-tour_list_c1">
                                <?php foreach($tour_c1 as $key=>$value){
                                $sqlqtour = "SELECT COUNT(*) as `numb` from #_baiviet where type='tour' and hienthi=1 and id_list=? ";

                                $counttour = $db->rawQueryOne($sqlqtour,array($value["id"]));
                            
                                $totaltour = $counttour['numb'];
                                ?>
                                <div class="name_count_tour <?= $value['tenkhongdau']?> js-tab"
                                    data-target="#category<?= $key +1?>">
                                    <div class="count_tour mb10">
                                        (<?= $totaltour?>)
                                    </div>
                                    <div class="name_list_c1_tour">
                                        <?=$value["ten"]?>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="name_count_tour p-relative all_tour show js-tab col-3">
                                <div class="count_tour mb10">
                                    (<?= $totaltourall?>)
                                </div>
                                <div class="name_list_c1_tour">
                                    TẤT CẢ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list_none">
                        <div class="list_tourist" id="category0">
                            <div class="title_name_list_tour mt150">
                                <a href="<?=_upload_hinhanh_l.$title_tour["photo"]?>" rel="dofollow" title="TOUR"
                                    class="d-block mt-10 hover-left ratio-img" img-width="134" img-height="412">
                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$title_tour["photo"]?>" alt="TOUR"
                                        <?=$func->errorImg()?>>
                                </a>
                            </div>
                            <div class="tourR">
                                <div class="owl-carousel owl-theme owl-tour">
                                    <?php foreach ($tour as $k => $v) {?>
                                    <div class="box_tour  mt150">
                                        <div class="img_tour">
                                            <span rel="dofollow" title="<?=$v["ten"]?>"
                                                class="d-block hover-left ratio-img" img-width="300.46"
                                                img-height="422.14">
                                                <img class="ratio-img__content img-scale"
                                                    src="./assets/images/loading_image.svg"
                                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                                    <?=$func->errorImg()?>>
                                            </span>
                                            <div class="title_tour">
                                                <?=$v["ten"]?>
                                            </div>
                                        </div>
                                        <div class="bottom0 col-12">
                                            <div class="desc_tour line-3">
                                                <?=  htmlspecialchars_decode($v["mota"])?>
                                            </div>
                                            <div class="flex-center mt5">
                                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="link_tour">Xem
                                                    thêm
                                                    <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tour_of_c1">
                        <?php if(count($tour_c1)>0){?>

                        <?php foreach($tour_c1 as $k1 => $value){
                        $tour_of_c1 = $db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , mota_$lang as mota , type , photo from #_baiviet where hienthi=1 and id_list=? and type=? order by stt asc,id desc",array($value['id'],'tour'));?>
                        <?php if(count($tour_of_c1)>0){?>
                        <div class="list_tourist box-tab display-n" id="category<?= $k1 +1?>">
                            <div class="title_name_list_tour mt150">
                                <a href="<?=_upload_hinhanh_l.$title_tour["photo"]?>" rel="dofollow" title="TOUR"
                                    class="d-block mt-10 hover-left ratio-img" img-width="134" img-height="412">
                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$title_tour["photo"]?>" alt="TOUR"
                                        <?=$func->errorImg()?>>
                                </a>
                            </div>
                            <div class="tourR">
                                <div class="owl-carousel owl-theme tour_c1">
                                    <?php foreach ($tour_of_c1 as $k => $v) {?>
                                    <div class="box_tour  mt150">
                                        <div class="img_tour">
                                            <span rel="dofollow" title="<?=$v["ten"]?>"
                                                class="d-block hover-left ratio-img" img-width="300.46"
                                                img-height="422.14">
                                                <img class="ratio-img__content img-scale"
                                                    src="./assets/images/loading_image.svg"
                                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                                    <?=$func->errorImg()?>>
                                            </span>
                                            <div class="title_tour">
                                                <?=$v["ten"]?>
                                            </div>
                                        </div>
                                        <div class="bottom0">
                                            <div class="desc_tour line-3">
                                                <?=  htmlspecialchars_decode($v["mota"])?>
                                            </div>
                                            <div class="flex-center mt5">
                                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="link_tour">Xem
                                                    thêm
                                                    <i class="far fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <script>
                            $('div.<?= $value['tenkhongdau']?>').click(function() {

                                if (!$("#list_none").hasClass('d-none')) {

                                    $("#list_none").removeClass('d-none');
                                    $("#list_none").addClass('d-none');



                                } else {


                                    $("#list_none").addClass('d-none');


                                }

                            });
                            </script>
                        </div>
                        <?php }?>
                        <?php }?>
                        <?php }?>
                    </div>
                    <?php }else{ ?>
                            <!---MOBILE DEVICETYPE--->
                            <!---MOBILE DEVICETYPE--->
                            <!---MOBILE DEVICETYPE--->
                                <div class="tour_top">
                                    <div class="tour_travel col-12mobile col-8 display-flex">
                                        
                                        <div class="right_tourist col-12 title_desc_tourist">
                                            <div class="title_tourist_c1 mb10">
                                                <?=$seotour['title_'.$seolang]?>
                                            </div>
                                            <div class="desc_tourist_c1 line-4">
                                                <?=$seotour['description_'.$seolang]?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-12mobile pt50 pb50 display-flex list_c1_tour">
                                        <div class="owl-carousel p-relative col-9 owl-theme" id="owl-tour_list_c1">
                                            <?php foreach($tour_c1 as $key=>$value){
                                            $sqlqtour = "SELECT COUNT(*) as `numb` from #_baiviet where type='tour' and hienthi=1 and id_list=? ";

                                            $counttour = $db->rawQueryOne($sqlqtour,array($value["id"]));
                                        
                                            $totaltour = $counttour['numb'];
                                            ?>
                                            <div class="name_count_tour <?= $value['tenkhongdau']?> js-tab"
                                                data-target="#category<?= $key +1?>">
                                                <div class="count_tour mb10">
                                                    (<?= $totaltour?>)
                                                </div>
                                                <div class="name_list_c1_tour">
                                                    <?=$value["ten"]?>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="name_count_tour p-relative all_tour show js-tab col-3">
                                            <div class="count_tour mb10">
                                                (<?= $totaltourall?>)
                                            </div>
                                            <div class="name_list_c1_tour">
                                                TẤT CẢ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="list_none">
                                    <div class="" id="category0">
                                        <div class="title_name_list_tour mt150">
                                            <a href="<?=_upload_hinhanh_l.$title_tour["photo"]?>" rel="dofollow" title="TOUR"
                                                class="d-block mt-10 hover-left rotateg90 ratio-img" img-width="134" img-height="412">
                                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                                    data-src="<?=_upload_hinhanh_l.$title_tour["photo"]?>" alt="TOUR"
                                                    <?=$func->errorImg()?>>
                                            </a>
                                        </div>
                                        <div class="tourR">
                                            <div class="owl-carousel owl-theme owl-tour">
                                                <?php foreach ($tour as $k => $v) {?>
                                                <div class="box_tour_m  mt150">
                                                    <div class="img_tour_m">
                                                        <span rel="dofollow" title="<?=$v["ten"]?>"
                                                            class="d-block hover-left ratio-img" img-width="300.46"
                                                            img-height="422.14">
                                                            <img class="ratio-img__content img-scale"
                                                                src="./assets/images/loading_image.svg"
                                                                data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                                                <?=$func->errorImg()?>>
                                                        </span>
                                                        <div class="title_tour">
                                                            <?=$v["ten"]?>
                                                        </div>
                                                    </div>
                                                    <div class="bottom0 col-12">
                                                        <div class="desc_tour line-3">
                                                            <?=  htmlspecialchars_decode($v["mota"])?>
                                                        </div>
                                                        <div class="flex-center mt5">
                                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="link_tour">Xem
                                                                thêm
                                                                <i class="far fa-long-arrow-right"></i></a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="tour_of_c1">
                                    <?php if(count($tour_c1)>0){?>

                                    <?php foreach($tour_c1 as $k1 => $value){
                                    $tour_of_c1 = $db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , mota_$lang as mota , type , photo from #_baiviet where hienthi=1 and id_list=? and type=? order by stt asc,id desc",array($value['id'],'tour'));?>
                                    <?php if(count($tour_of_c1)>0){?>
                                    <div class="box-tab display-n" id="category<?= $k1 +1?>">
                                    <div class="title_name_list_tour mt150">
                                            <a href="<?=_upload_hinhanh_l.$title_tour["photo"]?>" rel="dofollow" title="TOUR"
                                                class="d-block mt-10 hover-left rotateg90 ratio-img" img-width="134" img-height="412">
                                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                                    data-src="<?=_upload_hinhanh_l.$title_tour["photo"]?>" alt="TOUR"
                                                    <?=$func->errorImg()?>>
                                            </a>
                                        </div>
                                        <div class="tourR">
                                            <div class="owl-carousel owl-theme tour_c1">
                                                <?php foreach ($tour_of_c1 as $k => $v) {?>
                                                <div class="box_tour_m  mt150">
                                                    <div class="img_tour_m">
                                                        <span rel="dofollow" title="<?=$v["ten"]?>"
                                                            class="d-block hover-left ratio-img" img-width="300.46"
                                                            img-height="422.14">
                                                            <img class="ratio-img__content img-scale"
                                                                src="./assets/images/loading_image.svg"
                                                                data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                                                <?=$func->errorImg()?>>
                                                        </span>
                                                        <div class="title_tour">
                                                            <?=$v["ten"]?>
                                                        </div>
                                                    </div>
                                                    <div class="bottom0 col-12">
                                                        <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>">
                                                            <div class="desc_tour line-3">
                                                                <?=  htmlspecialchars_decode($v["mota"])?>
                                                            </div>
                                                        </a>
                                                        <div class="flex-center mt5">
                                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="link_tour">Xem
                                                                thêm
                                                                <i class="far fa-long-arrow-right"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <script>
                                        $('div.<?= $value['tenkhongdau']?>').click(function() {

                                            if (!$("#list_none").hasClass('d-none')) {

                                                $("#list_none").removeClass('d-none');
                                                $("#list_none").addClass('d-none');



                                            } else {


                                                $("#list_none").addClass('d-none');


                                            }

                                        });
                                        </script>
                                    </div>
                                    <?php }?>
                                    <?php }?>
                                    <?php }?>
                                </div>

                            <!---END MOBILE DEVICETYPE--->
                            <!---END MOBILE DEVICETYPE--->
                            <!---END MOBILE DEVICETYPE--->



                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper-introduces wow fadeInRight" data-wow-offset="50" data-wow-duration="3"
        data-wow-delay="0.2s">

        <div class="grid wide">

            <div class="row">
                <div class="col l-7 m-7 mt50 c-12">

                    <di v class="wrapper-introduces__img p-relative">

                        <a href="gioi-thieu" class="d-block youtube_iframe" rel="dofollow" title="Giới thiệu">

                            <iframe width="942" height="530"
                                src="<?=$about["links"]?>?controls=0&autoplay=1&mute=1"></iframe>

                        </a>

                    </di>

                </div>
                <div class="col l-5 m-5 c-12 mb-m-20 mt50 mt30mobile">

                    <div class="pl65 pd0mobile">
                        <div class="wrapper-introduces__title mb15">

                            <a href="gioi-thieu" rel="dofollow" title="<?=$about["ten"]?>"
                                class="d-flex align-items-center">

                                <div class="scrolltext_Introduces">
                                    <div class="scrolltext"><?= $about["ten"]?></div>
                                </div>

                            </a>


                        </div>

                        <div class="wrapper-introduces__title-des"><?= htmlspecialchars_decode($about["mota"])?></div>

                        <div class="wrapper-introduces__parameter pt20">

                            <div class="row">

                                <?php for($i=0;$i<count($introTop);$i++){ ?>

                                <div
                                    class="col l-4 m-2-4 c-4 mb20 col-intro__check intro-col<?=$i?> d-flex flex-column">

                                    <div class="wrapper-introduces__boxbottom flex-cl-1 d-flex flex-column">

                                        <div class="wrapper-introduces__boxbottom-img">

                                            <span class="d-block ratio-img" img-width="63" img-height="63">

                                                <img class="ratio-img__content img-scale"
                                                    src="./assets/images/loading_image.svg"
                                                    data-src="<?=_upload_hinhanh_l.$introTop[$i]["photo"]?>"
                                                    alt="<?=$introTop[$i]["ten"]?>" <?=$func->errorImg()?>>

                                            </span>

                                        </div>

                                        <div class="wrapper-introduces__boxbottom-detail flex-cl-1 d-flex flex-column">

                                            <span class="wrapper-introduces__boxbottom-detail-numb flex-cl-1">+<span
                                                    id="count<?=$i?>">0</span> <?=$introTop[$i]["ten"]?></span>

                                            <span class="wrap-work__box-detail-line mt15"></span>

                                            <script>
                                            var mydiv<?=$i?> = document.getElementById("count<?=$i?>");

                                            var timeCurrent<?=$i?> = <?=$introTop[$i]["number"]?>;

                                            var checkTime<?=$i?> = 0;

                                            if (timeCurrent<?=$i?> < 50) {

                                                checkTime<?=$i?> = 100;

                                            } else {

                                                checkTime<?=$i?> = 20;

                                            }
                                            var time<?=$i?> = setInterval(getcounter, checkTime<?=$i?>);

                                            function getcounter() {

                                                if (mydiv<?=$i?>.textContent >= timeCurrent<?=$i?>) {
                                                    clearInterval(time<?=$i?>);
                                                } else {
                                                    mydiv<?=$i?>.textContent++;
                                                }

                                            }
                                            </script>

                                        </div>

                                    </div>


                                </div>

                                <?php }?>




                            </div>

                        </div>
                    </div>

                </div>



            </div>

        </div>

    </section>
</div>


<section class="pt60 pb60" style="background-color: var(--html-cl-website);">
    <div class="container">
        <div class="row">
            <div class="col-12 item p-relative">
                <div class="col-12">
                    <div class="grid-3icon">
                        <?php foreach($visao as $key=>$value){ $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);?>
                        <div class="why display-flex" data-target="#why<?=$key?>">
                            <div class="img_why">
                                <div class="thumb_icon">
                                    <span class="d-block ratio-img" img-width="88" img-height="87">
                                        <img class="ratio-img__content filter_icon img-scale"
                                            src="./assets/images/loading_image.svg"
                                            data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten"]?>">
                                    </span>
                                </div>
                            </div>
                            <div class="title_desc_why">
                                <div class="title_why line-1 mb15">
                                    <?=$value["ten"]?>
                                </div>
                                <div class="desc_why line-3">
                                    <?=$seoDB["description_$lang"]?>
                                </div>
                            </div>
                            <span class="border_right"></span>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service pt50 pb110"
    style="background:url('<?= _upload_hinhanh_l.$bg_dichvu['photo']?>') no-repeat center center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <a href="dich-vu">
                <div class="name_title_service mb85">
                    <div class="title_service_en mb25">
                        Travel Services
                    </div>
                    <div class="title_service_vi">
                        DỊCH VỤ DU LỊCH
                    </div>
                </div>
                </a>
                <div class="owl-carousel owl-theme" id="owl-dichvu">
                    <?php foreach ($service_c1 as $k => $v) {$seoDB = $seo->getSeoDB($v['id'],'baiviet','man_list',$v["type"]);?>
                    <div class="box_service">
                        <div class="img_service">
                            <a href="" rel="dofollow"
                                title="<?=$v["ten"]?>" class="d-block hover-left ratio-img" img-width="399"
                                img-height="322">
                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                    <?=$func->errorImg()?>>
                            </a>
                        </div>
                        <div class="title_desc_service">
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>">
                            <div class="title_service line-1">
                                <div class="icon_service">
                                    <img src="<?=_upload_baiviet_l.$v["icon"]?>" class="mr20" alt="<?=$v["ten"]?>">
                                </div>
                                <?=$v["ten"]?>
                            </div>
                        </a>
                            <div class="desc_service line-2 mt20">
                                <?=$seoDB["description_$lang"]?>
                            </div>
                            <div class="flex-center mt20">
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="button_service ">XEM NGAY</a>
                            </div>
                        </div>

                    </div>
                    <?php }?>
                </div>
                <div class="col-12 box_service_line">
                    <span class="service_line"> </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="experience pt75 pb160"
    style="background:url('<?= _upload_hinhanh_l.$bg_tintuc['photo']?>') no-repeat center center/cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <a href="tin-tuc">
                <div class="name_title_experience">
                    <div class="title_experience_en mb25">
                        Travel experience
                    </div>
                    <div class="title_experience_vi">
                        KINH NGHIỆM DU LỊCH
                    </div>
                </div>
                </a>
                <div class="owl-carousel owl-theme" id="owl-tintuc">
                    <?php foreach ($news as $k => $v) {$seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                    <div class="padding_box_experience">
                        <div class="box_experience">
                            <div class="img_experience">
                                <span rel="dofollow" title="<?=$v["ten"]?>" class="d-block hover-left ratio-img" img-width="399"
                                    img-height="322">
                                    <img class="ratio-img__content br25 img-scale"
                                        src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                        <?=$func->errorImg()?>>
                                </span>
                            </div>
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>">
                            <div class="title_desc_experience pt15">
                                <div class="title_experience line-2">

                                    <?=$v["ten"]?>
                                </div>
                                <span class="experience_line"></span>
                                <div class="desc_experience line-3 mt30">
                                    <?=$seoDB["description_$lang"]?>
                                </div>

                            </div>
                            </a>
                            <div class="flex-center mt50m mt30">
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="link_experience">XEM NGAY <i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="register pt30 pb50" style="background-color: var(--html-cl-website);">
    <div class="container">
        <div class="row">
            <div class="col-12 item grid-dk">
                <div class="col-12 register_left">
                    <div class="title_register_en mb10">
                        Mai Đình Tourist
                    </div>
                    <div class="title_register_vi">
                        ĐĂNG KÝ TƯ VẤN NGAY
                    </div>
                </div>
                <div class="col-12 register_right mt20">
                    <input type="text" name="regis-index-email" placeholder="Nhập Email">
                    <button class="p-relative link_register wrapper-regis-btn">ĐĂNG KÍ</button>
                </div>
            </div>
        </div>
    </div>
</section>

