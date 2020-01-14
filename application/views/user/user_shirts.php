<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <h2 class="style top">Available Shirts</h2>
            <!-- start grids_of_3 -->
            <div class="main_bg">
                <div class="wrap">
                    <div class="main">
                        <!-- start grids_of_3 -->
                        <?php $ctr = 0; ?>
                        <?php foreach ($items as $item) : ?>
                            <div class="grids_of_3">

                                <?php $ctr++; ?>
                                <div class="grid1_of_3">
                                    <a href="<?= base_url() ?>User/viewItem/<?= $item->id ?>">
                                        <img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" width="116" height="116" style="" alt="" />
                                        <h3><?= $item->name ?></h3>
                                        <div class="price">
                                            <h4>P<?= $item->price ?><span>indulge</span></h4>
                                        </div>
                                        <span class="b_btm"></span>
                                    </a>
                                </div>
                                <?php if ($ctr == 3) { ?>
                                    <div class="clear"></div>
                                <?php $ctr = 0;
                                    } ?>
                            </div>

                        <?php endforeach; ?>


                        <!-- end grids_of_3 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>