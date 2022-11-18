<div id="menu-mobile" class="d-none d-block-m">

    <nav id="mmenu">

        <ul>
            
           

            <li>

                <a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href=""
                    title="Trang chủ">TRANG CHỦ</a>

            </li>

            <li>

                <a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu"
                    title="GIỚI THIỆU">GIỚI THIỆU</a>

            </li>
            <li>

            
                <a itemprop="url" href="tour">TOUR</a>

                <?php if(count($tour_c1)>0){ ?>

                        <a href="javascript:" class="toggle-btn ic-arrow">

                            <span></span>

                        </a>

                <?php }?>

                

                <ul class="inner ul-list-none">

                        <?php foreach($tour_c1 as $key => $value){ ?>

                        <li>
                                <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                    title="<?= $value['ten']?>"><?= $value['ten']?></a>
                        </li>

                        <?php }?>

                </ul> 
            </li>
            
            <li>

            
                <a itemprop="url" href="dich-vu">DỊCH VỤ</a>

                <?php if(count($service_c1)>0){ ?>

                        <a href="javascript:" class="toggle-btn ic-arrow">

                            <span></span>

                        </a>

                <?php }?>

                

                <ul class="inner ul-list-none">

                        <?php foreach($service_c1 as $key => $value){ ?>

                        <li>
                                <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                    title="<?= $value['ten']?>"><?= $value['ten']?></a>
                        </li>

                        <?php }?>

                </ul> 
            </li>
            <?php /*
            <li>

                <a class="transition <?php if($com=='ky-gui') echo 'active'; ?>" href="ky-gui" title="Ký gửi">Ký gửi</a>

                <?php if(count($dichvu_c1)) { ?>

                <ul>

                    <?php for($i=0;$i<count($dichvu_c1); $i++) {
                        $sql="select id, ten_$lang , tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where id_list = '".$dichvu_c1[$i]['id']."' and hienthi > 0 and type='dich-vu' order by stt,id desc";
                        $spcatmenu = $db->rawQuery($sql); 
                    ?>

                    <li>

                        <a class="transition" title="<?=$dichvu_c1[$i]['ten']?>"
                            href="<?=$dichvu_c1[$i]["type"]?>/<?=$dichvu_c1[$i]["tenkhongdau"]?>"><?=$dichvu_c1[$i]['ten']?></a>

                        <?php if(count($spcatmenu)) { ?>

                        <ul>

                            <?php for($j=0;$j<count($spcatmenu); $j++) {?>

                            <li>

                                <a class="transition" title="<?=$spcatmenu[$j]['ten_'.$lang]?>"
                                    href="<?=$spcatmenu[$j]["type"]?>/<?=$spcatmenu[$j]["tenkhongdau"]?>"><?=$spcatmenu[$j]['ten_'.$lang]?></a>



                            </li>

                            <?php } ?>

                        </ul>

                        <?php } ?>

                    </li>

                    <?php } ?>

                </ul>

                <?php } ?>

            </li>
            */ ?>

            <li>
                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="TIN TỨC">TIN TỨC</a>
            </li>

            <li>

                <a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="LIEN HỆ">LIÊN HỆ</a>

            </li>

        </ul>

    </nav>

</div>