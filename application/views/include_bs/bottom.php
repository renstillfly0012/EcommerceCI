<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>template/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->

<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>template/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>template/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url() ?>template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>template/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>

<script type="text/javascript" src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script type="text/javascript">
  $(".confirm").click(function() {
    //var id = $(this).parents("tr").attr("id");

    swal({
        title: "Are you sure?",
        text: "you want to log out?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        cancelButtonText: "No, cancel ",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        // $(document).ready(function(){
        // 	$('.rlate_id').click(function(){
        // 		$late_id = $(this).attr('name');
        // 		$('.remove_id').click(function(){
        // 			window.location = 'delete_c101.php?late_id=' + $late_id;
        // 		});
        // 	});
        // });
        if (isConfirm) {
          swal("Action", "Successfully Log Out", "success");
          // window.location = "<?= base_url() ?>user/editProfile/" + id;
          window.location = "<?= base_url() ?>home/logout";
          // $.ajax({
          //     url: '/item-list/' + id,
          //     type: 'DELETE',
          //     error: function() {
          //         alert('Something is wrong' + id);
          //     },
          //     success: function(data) {
          //         $("#" + id).remove();
          //         swal("Deleted!", "Your product has been deleted.", "success");
          //     }
          // });
        } else {
          swal("Cancelled", "", "error");
        }
      });

  });


  $(".remove").click(function() {
    var id = $(this).parents("tr").attr("id");

    swal({
        title: "Are you sure?",
        text: "you want to delete this item?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes",
        cancelButtonText: "No, cancel ",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        // $(document).ready(function(){
        // 	$('.rlate_id').click(function(){
        // 		$late_id = $(this).attr('name');
        // 		$('.remove_id').click(function(){
        // 			window.location = 'delete_c101.php?late_id=' + $late_id;
        // 		});
        // 	});
        // });
        if (isConfirm) {
          swal("Action", "Successfully Deleted", "success");
          window.location = "<?= base_url() ?>item/delete/" + id;
          // window.location = "<?= base_url() ?>home/logout";
          // $.ajax({
          //     url: '/item-list/' + id,
          //     type: 'DELETE',
          //     error: function() {
          //         alert('Something is wrong' + id);
          //     },
          //     success: function(data) {
          //         $("#" + id).remove();
          //         swal("Deleted!", "Your product has been deleted.", "success");
          //     }
          // });
        } else {
          swal("Cancelled", "", "error");
        }
      });

  });
</script>






</body>

</html>