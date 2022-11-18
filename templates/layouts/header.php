<header class="wrapper-header pt10 pb10 scroll-fixed d-none-m d-none-tablet d-none-tl <?php if($source!='index'){echo 'box-shadown-tpl';} ?>">

    <div class="grid wide">

        <div class="row align-items-center">

            <div class="col-3 item">

                <div class="wrapper-header__logo">

                    <a href="" class="p-relative ratio-img" img-width="141" img-height="111">

                        <img src="./assets/images/loading_image.svg" data-src="<?=_upload_hinhanh_l.$logo["photo"]?>" alt="MAI ĐÌNH" class="ratio-img__content img-scale">


                    </a>

                </div>

            </div>

            <div class="col-9 item">

                <?php include_once _layouts."menu.php";  ?>

            </div>

        </div>

    </div>

</header>
<style>
    .wrapper-header.fixed{

    }
</style>