<footer class="footer pb20 fadeInRight wow" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_footer["photo_".$lang]?>') center center/cover">

    <div class="box-footer">

        <div class="grid wide">

            <div class="row p-relative">

                <div class="col l-3 m-6 c-12 p-relative">

                    <div class="box-mg info_footer">

                        <div class="title-footer mt60">

                            <span>MAI ĐÌNH TOURIST</span>

                        </div>

                        <div class="desc-footer mt20">

                            <?=htmlspecialchars_decode($footer["mota"])?>

                        </div>



                    </div>

                </div>
                <div class="col l-3 m-6 c-12 p-relative">

                    <div class="box-mg center_footer">

                        <div class="title-footer mt60 p-relative">

                            <span>TOUR CHÍNH</span>

                        </div>

                        <div class="desc-footer mt20">

                            <ul class="ul-list-none ml5">

                                <?php foreach($tour_c1 as $key => $value){?>

                                <li>
                                    <a href="<?=$value["type"]?>/<?= $value['tenkhongdau']?>"
                                        title="<?= $value['ten']?>">
                                        <img src="./assets/images/tienIMG/tron.png" class="mr10"
                                            alt="<?= $value['ten']?>">
                                        <?= $value['ten']?>
                                    </a>
                                </li>
                                <?php }?>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col l-3 m-6 c-12 p-relative">

                    <div class="box-mg center_footer">

                        <div class="title-footer mt60 p-relative">

                            <span>QUY ĐỊNH & CHÍNH SÁCH</span>

                        </div>

                        <div class="desc-footer mt20">

                            <ul class="ul-list-none ml-10">

                                <?php foreach($chinhsach as $key => $value){?>

                                <li>
                                    <a href="<?=$value["type"]?>/<?= $value['tenkhongdau']?>"
                                        title="<?= $value['ten']?>">
                                        <img src="./assets/images/tienIMG/tron.png" class="mr10"
                                            alt="<?= $value['ten']?>">
                                        <?= $value['ten']?>
                                    </a>
                                </li>
                                <?php }?>
                                <li>
                                    <img src="./assets/images/tienIMG/bct.png" alt="BỘ CÔNG THƯƠNG">
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>





                <div class="col l-3 m-6 c-12 p-relative">

                    <div class="box-mg ml20 box-mg--lastchild">

                        <div class="title-footer title-footer--modifiers mt60">

                            <span>FANPAGE</span>

                        </div>

                        <div class="mt20">

                            <div class="wrapper-form__footer">

                                <div class="fb-page ml10" data-href="<?=$row_setting['facebook']?>" data-width="350"
                                    data-height="150" data-small-header="false" data-adapt-container-width="true"
                                    data-hide-cover="false" data-show-facepile="true" data-show-posts="true">

                                    <div class="fb-xfbml-parse-ignore">

                                        <blockquote cite="<?=$row_setting['facebook']?>"><a
                                                href="<?=$row_setting['facebook']?>"><?=$row_setting['name_'.$lang]?></a>

                                        </blockquote>

                                    </div>

                                </div>
                                <div class="mt20 mb20">

                                    <?=$func->getSocial($socical)?>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="col-12">
        <div class="owl-carousel owl-theme" id="owl-album">
            <?php foreach($introBottom as $key => $value){
                $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);
                $albumBottom = $db->rawQuery("select * from #_baiviet_photo where id_baiviet=? order by stt asc",array($value['id']));
                ?>
            <div class="col-12 intro-bottom">
                <a href="<?=_upload_baiviet_l.$value["photo"]?>" data-fancybox="img-<?=$key?>" rel="dofollow" title="" class="d-block hover-left ratio-img" img-width="237.5"
                    img-height="187">
                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                        data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="" <?=$func->errorImg()?>>
                </a>
                    <?php if(count($albumBottom)>0){ ?>
                        <?php foreach($albumBottom as $k=>$v){ ?>
                            <a data-fancybox="img-<?=$key?>" href="<?=_upload_baiviet_l.$v['photo']?>"></a>
                        <?php } ?>
                    <?php } ?>
            </div>
            <?php }?>
        </div>
    </div>

</footer>

<div class="menu-bottom d-none">
    <ul class="clearfix">
        <li>
            <a href="" title="HomePage">
                <i class="fal fa-home"></i>
                <span class="sub">Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" title="clickToCall">
                <i class="fa-light fa-circle-phone-flip"></i>
                <span class="sub">Hotline</span>
            </a>
        </li>
        <li>
            <a href="" class="p-relative d-block" title="Trang chủ">

                <img class="scaleimg" width="70" height="70" src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>"
                    alt="Trang chủ" onerror="this.src='images/no-image.jpg'" />

            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#options" id="tool-1" title="Tiện ích" class="js-mobi-tool">
                <i class="fas fa-ellipsis-h mobi-tool-act"></i>
                <span class="sub">Tiện ích</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">
                <span class="bars-menu mobi-tool-act"></span>
                <span class="sub">Menu</span>
            </a>
        </li>
    </ul>
</div>