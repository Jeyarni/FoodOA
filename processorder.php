<?php
session_start();
include('fragments/header.php');

?>
<!-- Begin page content -->
<main id="page-sidedish" role="main" class="flex-shrink-0">

  <div class="container mt-5 pt-5">
    <?php
    if (isset($_POST['submitbill'])) {
      $total = 0;
      foreach ($_POST['qty'] as $qkey => $qty) {
        //ecarray_keys($qty);
        // echo $qty;
        //print_r($qty);
        $subtotal = 0;
        foreach ($qty as $k => $v) {
          $subtotal = $k * $v;
        }
        $total = $total + $subtotal;
      }

      header("Location:processorder.php?total={$total}");
      exit;
      // remove all session variables

    }

    if (isset($_GET['total'])) {
      ?>
      <div class="jumbotron">
        <h1 class="display-4">Your Total Bill is : <?php echo $_GET['total']; ?></h1>

      </div>

    <?php
      session_unset();

      // destroy the session 
      session_destroy();
    }

    ?>
    <?php if (isset($_SESSION['orders'])) { ?>
      <form action="processorder.php" method="post">
        <div class="row justify-content-center" style="color:white;">

          <?php

            include('config/dbconfig.php');

            foreach ($_SESSION['orders'] as $orderId) {
              $sql = "SELECT * FROM menu_dishes WHERE id={$orderId}";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                  ?>

                <div class="card w-75 card-pill m-2" style="background-color:#8b685bb0;border:5px solid rgba(0,0,0,.125)">
                  <div class="card-body pt-0">

                    <div class="row">
                      <div class="col">
                        <img src="assests/briyani.jpg" class="rounded-circle" height="110" />
                      </div>
                      <div class="col pt-3">
                        <h3><?php echo $row['dishname']; ?></h3>

                      </div>

                      <div class="col pt-3">
                        <h5>Unit Price : </h5>
                        <h5><?php echo "LKR :" . $row['price']; ?></h5>
                      </div>

                      <div class="col pt-3">
                        <h5>Quantity :</h5> <input type="text" class="form-control" name="qty[<?php echo $row['id']; ?>][<?php echo $row['price']; ?>]" />

                      </div>

                    </div>

                  </div>
                </div>
          <?php
                }
              }
            }

            ?>

        </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <input type="submit" name="submitbill" value="Process Order" class="btn btn-success float-right mr-5" />
    </div>
    </form>
  <?php } ?>
  </div>

</main>

<?php include('fragments/footer.php'); ?>