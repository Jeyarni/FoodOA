<?php
session_start();
include('config/dbconfig.php');
include('fragments/header.php');

?>

<!-- Begin page content -->
<main id="page-dish" role="main" class="flex-shrink-0">
  <div class="container mt-5 pt-5">
    <?php
    if (isset($_GET['orderid'])) {
      $foundstatus = false;
      if (isset($_SESSION['orders'])) {
        foreach ($_SESSION['orders'] as $order) {
          if ($order == $_GET['orderid']) {
            $foundstatus = true;
          }
        }
      }

      if ($foundstatus == false) {
        $_SESSION['orders'][] = $_GET['orderid'];
        echo "<div class='alert alert-success' role='alert'>
    Item had been Ordered
  </div>";
      } else {
        echo "<div class='alert alert-danger' role='alert'>
        Item is alredy in Order
      </div>";
      }
    }
    ?>
    <div class="row justify-content-center">

      <?php

      $sql = "SELECT * FROM menu_dishes WHERE category='MAIN_DISH'";
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
                  <h5>Price : <?php echo "LKR :" . $row['price']; ?></h5>
                  <a href="index.php?orderid=<?php echo $row['id']; ?>" class="btn btn-success">Order</a>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } ?>
    </div>
  </div>
</main>

<?php include('fragments/footer.php'); ?>