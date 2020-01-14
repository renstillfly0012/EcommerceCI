<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<div class="container registration">
    <div class="row">
        <div class="col-md">
            <h3>Transaction History</h3>
            <table class="table table-striped responsive">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Total</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order as $orders) : ?>
                        <tr>
                            <th scope="row"><?= $orders->int_order_id ?></th>
                            <td><?= $orders->int_total ?></td>
                            <td><?= $orders->created_at ?></td>
                            <td>
                                <?php 
                                /*switch($orders->status){
                                    case 0:
                                    echo 'Preparing Order';
                                    break;
                                    case 0:
                                    echo 'Delivering Order';
                                    break;
                                    case 2:
                                    echo 'Order received';
                                    break;
                                    default:
                                    break;

                                }*/
                                ?>
                                  Processing
                            </td>
                            <td>
                                <a type="button" href="<?= base_url()?>/User/getOrderDetails/<?=$orders->int_order_id?>"  class="btn btn-primary order_details" id="order_details" data-itemid='".$orders->id."'  data-target="#exampleModal">
                                <i class='fas fa-shopping-cart'></i> View Details
                                </a>

                                
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Transaction Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Iten Name</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>