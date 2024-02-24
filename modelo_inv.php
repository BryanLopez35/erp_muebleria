<!DOCTYPE html>
<html lang="en">
<?php include_once './includes/head.php'; ?>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php include_once './includes/nav.php'; ?>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <section id="tabla-container" class="container mt-4">
                <table id="tablaRegistros" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Modelo</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <?php include_once './includes/js.php'; ?>
    
    <script src="./assets/js/modeloinv.js"></script>

</body>

</html>