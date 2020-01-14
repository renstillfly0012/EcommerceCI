<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="<?= base_url() ?>/assets/images/logo.png" height="40" width="40" class="pull-left" ></img>&nbsp;&nbsp;&nbsp;ItamShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto pull-right">
          
       <li class="nav-item">
           <a class="nav-link" href="<?= base_url() ?>/">Home</a>
       </li>
       <?php if (!$this->session->login) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>home/loginpage">Login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>home/register">Register</a>
        </li>
        <?php } else { ?>
      
         <li class="nav-item pull-left">
          <a class="nav-link btn btn-info" href="" data-toggle="modal" data-target="#Modal1">View Cart <span class="badge badge-light"> <?= count($this->cart->contents()); ?></span></a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>home/logout">Logout</a>
        </li>
         <?php } ?>
         
      </ul>
    </div>
  </div>
</nav> -->



<div class="header_bg">
  <div class="wrap">
    <div class="header">
      <div class="logo">
        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/assets/images/logo.png" height="60" width="60" alt="" /> </a>
      </div>
      <div class="h_icon">
        <ul class="icon1 sub-icon1">
          <?php if ($this->session->login) { ?>
            <li><a class="active-icon c1" href="<?= base_url() ?>user/viewCart/"></a>
              <ul class="sub-icon1 list">
                <li>
                  <h3>Click to View your Cart</h3><a href=""></a>
                </li>

              </ul>


            <li><a class="active" href=""><img src="<?= base_url() ?>/assets/images/thumb_img/<?= $accounts->Image ?>" class="rounded-circle z-depth-0" alt="avatar image" style=" vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;"></a>
              <ul class="sub-icon1 list">
                <li>
                  <h3><?= $this->session->email ?></h3>
                </li>

                <li>
                  <h3><a href="<?= base_url() ?>user/viewProfile/<?= $this->session->usr_id ?>" style="color:black;">View Profile</a></h3>
                </li>

                <li>
                  <h3><a href="<?= base_url() ?>user/viewEditProfile/<?= $this->session->usr_id ?>" style="color:black;">Edit Profile</a></h3>
                </li>

                <li>
                  <h3><a href="<?= base_url() ?>user/viewTransactions/<?= $this->session->usr_id ?>" style="color:black;">View Transactions</a></h3>
                </li>

                <li>
                  <!-- <h3><a href="<?= base_url() ?>home/logout" style="color:red;">Log Out</a></h3> -->
                  <h3><a class="remove" style="color:red;">Log Out</a></h3>
                </li>

              </ul>
            </li>


            </li>
          <?php } ?>
        </ul>
      </div>


      <div class="h_search">
        <form>
          <input type="text" value="">
          <input type="submit" value="">
        </form>
        <br />

      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div class="header_btm">
  <div class="wrap">
    <div class="header_sub">
      <div class="h_menu">
        <ul>
          <?php $this->load->library('session');
          if (!$this->session->has_userdata('login', true)) { ?>

            <li class="active"><a href="<?= base_url() ?>home/index">Home</a></li> |

          <?php } else { ?>
            <li><a href="<?= base_url() ?>user/index">Home</a></li>|
          <?php } ?>

          <li><a href="<?= base_url() ?>user/viewSale" style="color:#E43A36;">sale</a></li> |
          <li><a href="<?= base_url() ?>user/viewShirts">shirts</a></li> |
          <li><a href="<?= base_url() ?>user/viewJackets">jackets</a></li> |
          <li><a href="<?= base_url() ?>user/viewFootwear">footwear</a></li> |
          <li><a href="<?= base_url() ?>user/viewServices">services</a></li> |
          <li><a href="<?= base_url() ?>user/viewContactUs">Contact us</a></li>|
          <?php if (!$this->session->has_userdata('login', true)) { ?>
            <li><a href="<?= base_url() ?>home/loginpage" style="color:black;">Login</a></li>|
            <li><a href="<?= base_url() ?>home/register" style="color:black;">Register</a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="top-nav">
        <nav class="nav">
          <a href="#" id="w3-menu-trigger"> </a>
          <ul class="nav-list" style="">
            <?php $this->load->library('session');
            if (!$this->session->has_userdata('login', true)) { ?>

              <li class="active nav-item"><a href="<?= base_url() ?>home/index">Home</a></li>

            <?php } else { ?>
              <li class="active nav-item"><a href="<?= base_url() ?>user/index">Home</a></li>
            <?php } ?>

            <li class="nav-item"><a href="sale.html" style="color:#E43A36; ">sale</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>user/viewShirts">shirts</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>user/viewJackets">jackets</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>user/viewFootwear">footwear</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>user/viewServices">services</a></li>
            <li class="nav-item"><a href="<?= base_url() ?>user/viewContactUs">Contact us</a></li>
            <?php if (!$this->session->has_userdata('login', true)) { ?>
              <li class="nav-item"><a href="<?= base_url() ?>home/loginpage" style="color:black;">Login</a></li>
              <li class="nav-item"><a href="<?= base_url() ?>home/register" style="color:black;">Register</a></li>

            <?php } else { ?>
              <li class="nav-item"><a href="<?= base_url() ?>home/logout" style="color:black;">Log Out</a></li>
            <?php } ?>

          </ul>
        </nav>
        <div class="search_box">
          <form>
            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
          </form>
        </div>
        <div class="clear"> </div>
        <script src="<?= base_url() ?>assets/new/js/responsive.menu.js"></script>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>



