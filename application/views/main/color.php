<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button> -->
            <h4 class="modal-title" id="myModalLabel">Update Inventory</h4>
        </div>

        <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <p>Item Name</p>
                        <p>Category</p>

                        <p>Color</p>

                        <p>Stocks to add</p>
                    </div>
                    <div class="col-md-6">

                        <form action="<?= base_url() ?>Home/updateColorStock" method="post">
                            <input type="hidden" name="id" value="<?= $item->id ?>">
                            <p class="ng-binding"><?= $item->name ?></p>
                            <p class="ng-binding"><?= $item->categories ?></p>
                            <p class="ng-binding">
                                <select id="color" name="color">
                                    <option value="Silver">Silver</option>
                                    <option value="Black">Black</option>
                                </select></p>
                            <input type="text" class="form-control " name="int_qty" id="int_qty" placeholder="Input Quantity">

                    </div>
                </div>
                <!-- <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Latest stock</p>
                        </div>
                        <div class="col-md-6">
                            <p class="ng-binding">12</p>
                        </div>
                    </div> -->
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value="Submit" class="btn btn-success">Add to stocks</button>
            </form>

        </div>

    </div>
</div>
<!-- /.modal-content -->
</div>
</div>