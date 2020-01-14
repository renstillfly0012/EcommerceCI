<!--start container-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box box-info collapsed-box">
        <div class="box-header with-border">
          <h3> <span class="fa fa-fw fa-list-alt" aria-hidden="true">
            </span>Stocks for Size</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
            </button>-->
          </div>
        </div>
        <div class="box-body">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>IMAGE</th>
              <th>NAME</th>
              <th>SMALL QUANTIY</th>
              <th>MEDIUM QUANTIY</th>
              <th>LARGE QUANTIY</th>
              <th>ACTION</th>
            </tr>
            <?php foreach ($items as $item) : ?>
              <tr id="<?= $item->id ?>">
                <td><?= $item->id ?></td>

                <td><img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" width="30px" /></td>
                <td><?= $item->name ?></td>
                <td><?= $item->S_qty ?></td>
                <td><?= $item->M_qty ?></td>
                <td><?= $item->L_qty ?></td>
                <td>
                  <a href="<?= base_url() ?>Home/viewSizeStock/<?= $item->id ?>" class="btn btn-success btn-md editbtn" id="<?= $item->id ?>">
                    <!-- <a  href="<?= base_url() ?>Home/viewSizeStock/<?= $item->id ?>" class="btn btn-success btn-md editbtn" id="<?= $item->id ?>" data-toggle="modal" data-target="#editmodal">   -->
                    <span class="glyphicon glyphicon-plus" aria-hidden="true">
                    </span>
                    &nbsp;Add Stocks
                  </a>



                </td>
              </tr>
            <?php endforeach ?>


          </table>
          <?= $this->pagination->create_links(); ?>
        </div>
        <div class="box-footer clearfix">

        </div>
      </div>
      <br />

    </div>



    <!--USERS-->


    <!--USERS-->
  </div>
</div>




</div>


<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="box box-info collapsed-box">
      <div class="box-header with-border">
        <h3> <span class="fa fa-fw fa-list-alt" aria-hidden="true">
          </span>Stocks for Color</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
            </button>-->
        </div>
      </div>
      <div class="box-body">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>SILVER QUANTITY</th>
            <th>BLACK QUANTITY</th>
            <th>ACTION</th>
          </tr>
          <?php foreach ($items as $item) : ?>
            <tr id="<?= $item->id ?>">
              <td><?= $item->id ?></td>

              <td><img src="<?= base_url() ?>/assets/images/thumb_img/<?= $item->image ?>" width="30px" /></td>
              <td><?= $item->name ?></td>
              <td><?= $item->Silver_qty ?></td>
              <td><?= $item->Black_qty ?></td>
              <td>
              <a href="<?= base_url() ?>Home/viewColorStock/<?= $item->id ?>" class="btn btn-success btn-md editbtn" id="<?= $item->id ?>">
                    <!-- <a  href="<?= base_url() ?>Home/viewSizeStock/<?= $item->id ?>" class="btn btn-success btn-md editbtn" id="<?= $item->id ?>" data-toggle="modal" data-target="#editmodal">   -->
                    <span class="glyphicon glyphicon-plus" aria-hidden="true">
                    </span>
                    &nbsp;Add Stocks
                  </a>



              </td>
            </tr>
          <?php endforeach ?>


        </table>
        <?= $this->pagination->create_links(); ?>
      </div>
      <div class="box-footer clearfix">

      </div>
    </div>
    <br />

  </div>



  <!--USERS-->


  <!--USERS-->
</div>
</div>
<!--end container-->

<!-- 
<div class="modal modal fade in" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
        </div>
    </div>
 -->


<!-- <div class="modal fade in" id="modal-cart">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">My Cart<span class="fa fa-fw fa-cart-plus"></span></h4>
      </div>
      <div class="modal-body">
        <!-- <?php //$this->load->view('item/my_cart'); 
              ?> 

      </div>
      <!-- /.modal-content 
    </div>
  </div>
</div> -->