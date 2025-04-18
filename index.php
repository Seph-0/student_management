<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid px-0">
        <div class="d-flex flex-row ">
            <div class=" bg-warning vh-100 px-0">
                <?php
                    include 'includes/sidebar.php';
                ?>
            </div>
            <div class="w-100 px-0">
                <div class="bg-success px-0">
                    <?php
                        include 'includes/header.php';
                    ?>
                </div>
                <div class="">

                </div>
            </div>
        </div>
    </div>
</body>
</html>