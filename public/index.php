<?php
require_once("../resources/config.php");

// echo TEMPLATE_FRONT . "/header.php";

include(TEMPLATE_FRONT . "header.php");
include(TEMPLATE_FRONT . "top_nav.php");




?>




<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php include("../resources/template/front/side_nav.php") ?>
        <!--categories-->
        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <!--carouse-->
                    <?php include("../resources/template/front/slider.php"); ?>
                </div>

            </div>

            <div class="row">
                <?php
                get_products();

                ?>



            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2030</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>