<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/muktiar/Php-with-Laravel-framework-BITM/oop3/e-commerce/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php
include_once ('../views/elements/head.php');
?>

<body>

<?php
include_once ('../views/elements/header.php');
?>

    <main>
        <!-- Main Navbar  -->
<?php
include_once ("../views/elements/navbar.php");
?>



        <!-- Main CAROUSEL  -->
<?php
include_once ('../views/elements/mainCarousel.php');
?>



        <!-- Support Section  -->




        <!--  New Arrival Section   &&&&&&    Slick Carousel    -->
      <?php
      include_once ('../views/elements/newArrival.php');
      ?>




        <!-- Discount Section  -->
      <?php
      include_once ('../views/elements/discount.php');
      ?>


        <!-- Most Reviewed &  Isotope Carousel   -->
        <!--  -->


<?php
include_once ('../views/elements/mostReviewed.php');
?>

        <!-- From Salauddin  -->

        <!--Offer section -->
       <?php
       include_once ('../views/elements/offers.php')
       ?>

    </main>

    <!-- footer section -->
  <?php
  include_once ('../views/elements/footer.php');
  ?>



    <!-- Script Files  -->

<?php
include_once ('../views/elements/script.php');
?>