<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Calling headings -->
    <?php include('include/head.php') ?>
</head>

<body>
    <!-- The Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
        <?php include('include/navbar.php') ?>

        <div class="card bg-dark text-white text-center rounded-0 mb-2 ">
            <?php include('include/title_card.php') ?>

            <!-- dynamic function -->
            <?php
            $include_folder = isset($_GET['folder']) ? $_GET['folder'] : 'pages/';
            $page = isset($_GET['page']) ? $_GET['page'] : 'card-menu';
            require_once($include_folder . $page . '.php');
            ?>

            <div class="container-fluid mb-4">
                <?php include('include/carousel.php') ?>

                <!-- Calling the footer -->
                <?php include('include/footer.php') ?>
</body>

</html>