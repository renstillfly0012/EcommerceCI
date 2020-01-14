<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style type="text/css">
    .registration {
        margin-top: 100px;

    }

    @media (max-device-width: 411px) {
        .registration {
            width: 100vw;
        }

        label {
            font-size: 24px;
        }

    }

    .error {
        color: red;
    }
</style>




<div class="container registration">
    <div class="row">
        <div class="col-md">
            <h3>Transaction History</h3>
            <table class="table table-striped responsive">
                <thead>
                    <tr>

                        <th scope="col">Item Name</th>
                        <th scope="col">Item Size</th>
                        <th scope="col">Item Color</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Item Quantity</th>
                        <th scope="col">Item Total</th>
                        <th scope="col">Date Of Purchase</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order as $orders) : ?>
                        <tr>

                            <td><?= $orders->name ?></td>
                            <td><?= $orders->size_id_fk ?></td>
                            <td><?= $orders->color_id_fk ?></td>
                            <td><?= $orders->price ?></td>
                            <td><?= $orders->int_qty ?></td>
                            <td><?= $orders->price * $orders->int_qty ?></td>
                            <td><?= $orders->created_at ?></td>


                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <a type="button" href="<?= base_url() ?>/user/viewTransactions/<?= $this->session->usr_id ?>" class="btn btn-danger " data-itemid='".$orders->id."' data-target="#exampleModal">
                        Back
                    </a>
                </div>
            </div>
            <br />


        </div>
    </div>
</div>