<!DOCTYPE html>
<html lang="en">
<?php include_once './includes/head.php'; ?>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php include_once './includes/nav.php'; ?>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="chart-container">
                <canvas id="clientesChart"></canvas>
            </div>
        </div>
    </div>

    <?php include_once './includes/js.php'; ?>
    <script src="./assets/js/graficas.js"></script>


</body>

</html>