<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<div class="" id="Modal1" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Shopping Cart</h3>


            <?php $this->load->library('session');
            if (!$this->session->has_userdata('login', true)) { ?>

                <a href="<?= base_url() ?>home/index" type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>

            <?php } else { ?>
                <a href="<?= base_url() ?>user/index" type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            <?php } ?>
        </div>
        <div class="modal-body">
            <table class="table table-hover">
                <tr>
                    <th>Quantity</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Item Price</th>
                    <th>Sub-total</th>

                </tr>
                <?php echo form_open('item/clear_item'); ?>

                <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

                    <!-- <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align:right">Item Price</th>
                <th style="text-align:right">Sub-Total</th>
              </tr> -->

                    <?php $i = 1; ?>

                    <?php foreach ($this->cart->contents() as $items) : ?>

                        <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                        <tr>
                            <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                            <td>
                                <?php echo $items['name']; ?>
                            </td>
                            <td> <?php if ($this->cart->has_options($items['rowid']) == TRUE) : ?>

                                    <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value) : ?>

                                            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                    </p>

                                <?php endif; ?>
                            </td>
                            <td>P<?php echo $this->cart->format_number($items['price']); ?></td>
                            <td>P<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                            <td>



                            </td>
                        </tr>

                        <?php $i++; ?>

                    <?php endforeach; ?>

                    <tr>
                        <td colspan="2"> </td>
                        <td class="right"><strong>Total</strong></td>
                        <td class="right">P<?php echo $this->cart->format_number($this->cart->total()); ?></td>

                    </tr>


                </table>

        </div>
        <div class="modal-footer">
            <?php $this->load->library('session');

            if ($this->session->has_userdata('login', true)) {
                if ($this->cart->total_items() > 0) { ?>
                    <button type="submit" class="btn btn-warning">Update
                        <span class="fa fa-fw fa-cart-plus" aria-hidden="true">
                    </button>

                    <a href="<?= base_url() ?>user/placeOrder/<?= $this->session->usr_id ?>" onclick="javascript:if(confirm('Are you sure to save a copy of this transaction?')){print();} " class="btn btn-primary btn-md pull-right">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true">
                        </span> Place to order
                    </a>




                <?php }
                } else { ?>

                <a href="<?= base_url() ?>home/loginpage" class="btn btn-primary btn-md pull-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true">
                    </span> Place to order
                </a>
            <?php } ?>
        </div>

    </div>
</div>