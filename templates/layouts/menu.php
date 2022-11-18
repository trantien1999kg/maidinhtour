<nav class="wrapper-nav__menu d-none-m d-none-tablet">



    <div class="col l-12 m-12 c-12">

        <ul class="nav-menu d-flex justify-content-between">

            <li class="<?php if($com=='' || $com=='index') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="" title="Trang chủ" rel="dofollow">TRANG CHỦ</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="gioi-thieu" title="Giới thiệu" rel="dofollow">GIỚI THIỆU</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>
            <li class="<?php if($com=='tour') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="tour" title="TOUR" rel="dofollow">TOUR</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
                <?php if(count($tour_c1)>0){?>
                <ul>
                    <?php
                                    foreach($tour_c1 as $key =>$vc2){ ?>
                    <li class="p-relative">

                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        <h4>

                            <?php }?>

                            <a href="<?= $vc2['type']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow"
                                title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>

                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        </h4>

                        <?php }?>




                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li class="<?php if($com=='dich-vu') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="dich-vu" title="DỊCH VỤ" rel="dofollow">DỊCH VỤ</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
                <?php if(count($service_c1)>0){?>
                <ul>
                    <?php
                                    foreach($service_c1 as $key =>$vc2){ ?>
                    <li class="p-relative">

                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        <h4>
                            <?php }?>
                            <a href="<?= $vc2['type']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow"
                                title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                        </h4>
                        <?php }?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li class="<?php if($com=='tin-tuc') echo ' active';?>">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="tin-tuc" title="Tin tức" rel="dofollow">TIN TỨC</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>

            </li>

            <li class="<?php if($com=='lien-he') echo ' active';?> p-relative">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="lien-he" title="Liên hệ" rel="dofollow">LIÊN HỆ</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>

            </li>
            <li class="search">
                <span class="search-Click">
                    <img src="./assets/images/tienIMG/searchW.png" alt="search">
                </span>
                <div class="nav-menu__formsearchheader d-flex align-items-center">

                    <input role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm">

                    <button class="nav-menu__formsearchheader-button" data-btn-search-pc="" type="submit"><i
                            class="fal fa-search"></i></button>

                </div>
            </li>
        </ul>
    </div>
</nav>