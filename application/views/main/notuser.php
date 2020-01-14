<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
  <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
</head>

<body>
  <script type="text/javascript">
    $(document).ready(function() {
      swal({
        title: "Unauthorized access",
        text: "Please login first.",
        //timer: 1500,
        showConfirmButton: true,
        type: 'warning'
      },
      function(isConfirm){
         window.location = "http://itwspec62019.000webhostapp.com/Home/loginpage";
      }
      );

    });
    
  </script>