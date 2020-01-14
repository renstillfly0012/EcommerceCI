<!-- start slider -->
<div id="da-slider" class="da-slider">
  <div class="da-slide">
    <h2>welcome to ITamShop</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
    <a href="<?= base_url() ?>user/viewAllItem" class="da-link">shop now</a>
    <div class="da-img"><img src="<?= base_url() ?>assets/new/images/slider1.png" alt="image01" /></div>
  </div>
  <div class="da-slide">
    <h2>Easy management</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
    <a href="<?= base_url() ?>user/viewAllItem" class="da-link">shop now</a>
    <div class="da-img"><img src="<?= base_url() ?>assets/new/images/slider2.png" alt="image01" /></div>
  </div>
  <div class="da-slide">
    <h2>Revolution</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
    <a href="<?= base_url() ?>user/viewAllItem" class="da-link">shop now</a>
    <div class="da-img"><img src="<?= base_url() ?>assets/new/images/slider3.png" alt="image01" /></div>
  </div>
  <div class="da-slide">
    <h2>Quality Control</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
    <a href="<?= base_url() ?>user/viewAllItem" class="da-link">shop now</a>
    <div class="da-img"><img src="<?= base_url() ?>assets/new/images/slider4.png" alt="image01" /></div>
  </div>
  <nav class="da-arrows">
    <span class="da-arrows-prev"></span>
    <span class="da-arrows-next"></span>
  </nav>
</div>
</div>
<!----start-cursual---->
<div class="wrap">
  <!----start-img-cursual---->
  <div id="owl-demo" class="owl-carousel">


    <div class="item" onclick="location.href='<?= base_url() ?>user/viewShirts';">
      <div class="cau_left">
        <img class="lazyOwl" data-src="<?= base_url() ?>assets/new/images/c2.jpg" alt="Lazy Owl Image">
      </div>
      <div class="cau_left">
        <h4><a href="<?= base_url() ?>user/viewShirts">shirts</a></h4>
        <a href="<?= base_url() ?>user/viewShirts" class="btn">shop</a>
      </div>
    </div>



    <div class="item" onclick="location.href='<?= base_url() ?>user/viewJackets';">
      <div class="cau_left">
        <img class="lazyOwl" data-src="<?= base_url() ?>assets/new/images/jacket1.jpg" alt="Lazy Owl Image">
      </div>
      <div class="cau_left">
        <h4><a href="<?= base_url() ?>user/viewJackets">jackets</a></h4>
        <a href="<?= base_url() ?>user/viewJackets" class="btn">shop</a>
      </div>
    </div>
    <div class="item" onclick="location.href='<?= base_url() ?>user/viewFootwear';">
      <div class="cau_left">
        <img class="lazyOwl" data-src="<?= base_url() ?>assets/new/images/c1.jpg" alt="Lazy Owl Image">
      </div>
      <div class="cau_left">
        <h4><a href="<?= base_url() ?>user/viewFootwear">footwears</a></h4>
        <a href="<?= base_url() ?>user/viewFootwear" class="btn">shop</a>
      </div>
    </div>

    <div class="item" onclick="location.href='#';">
      <div class="cau_left">
        <img class="lazyOwl" data-src="<?= base_url() ?>assets/new/images/c2.jpg" alt="Lazy Owl Image">
      </div>
      <div class="cau_left">
        <h4><a href="#">upcoming shirts</a></h4>
        <a href="#" class="btn">shop</a>
      </div>
    </div>
    <div class="item" onclick="location.href='#';">
      <div class="cau_left">
        <img class="lazyOwl" data-src="<?= base_url() ?>assets/new/images/c3.jpg" alt="Lazy Owl Image">
      </div>
      <div class="cau_left">
        <h4><a href="#">upcoming jackets</a></h4>
        <a href="#" class="btn">shop</a>
      </div>
    </div>

    <div class="item" onclick="location.href='#';">
      <div class="cau_left">
        <img class="lazyOwl" data-src="<?= base_url() ?>assets/new/images/c2.jpg" alt="Lazy Owl Image">
      </div>
      <div class="cau_left">
        <h4><a href="#">upcoming footwears</a></h4>
        <a href="#" class="btn">shop</a>
      </div>
    </div>
  </div>
  <!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
  <div class="wrap">
    <div class="main1">
      <h2>featured products</h2>
    </div>
  </div>
</div>
<!-- start main -->
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


<!-- 
      <div class="grids_of_3">
        <div class="grid1_of_3">
          <a href="details.html">
            <img src="<?= base_url() ?>assets/new/images/pic4.jpg" alt="" />
            <h3>branded bags</h3>
            <div class="price">
              <h4>$300<span>indulge</span></h4>
            </div>
            <span class="b_btm"></span>
          </a>
        </div>

        <div class="grid1_of_3">
          <a href="details.html">
            <img src="<?= base_url() ?>assets/new/images/pic5.jpg" alt="" />
            <h3>ems women bag</h3>
            <div class="price">
              <h4>$300<span>indulge</span></h4>
            </div>
            <span class="b_btm"></span>
          </a>
        </div>

        <div class="grid1_of_3">
          <a href="details.html">
            <img src="<?= base_url() ?>assets/new/images/pic6.jpg" alt="" />
            <h3>branded cargos</h3>
            <div class="price">
              <h4>$300<span>indulge</span></h4>
            </div>
            <span class="b_btm"></span>
          </a>
        </div>
        <div class="clear"></div>
      </div> -->

      <!-- end grids_of_3 -->
    </div>
  </div>
</div>