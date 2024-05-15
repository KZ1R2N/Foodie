<?php
require_once('../php/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/d4c58442e3.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="css/food-view.css">
    <link rel="stylesheet" href="css/virtual-select.min.css">
    <!-- JavaScript -->
    <script src="jQuery.js"></script>
</head>

<body>
    <section id="title">
        <div class="container-fluid">
            <!--Navigation-->
            <?php
            require_once('../php/Navigation.php');
            ?>
    </section>
    <section id="content" class="layout">
        <?php
        require_once('sidebar.php');
        ?>
        <div id="content-body">
            <div id="reg-table">
                <table>
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $list_sql = "SELECT * FROM registration";
                        $list_result = mysqli_query($connect, $list_sql);
                        $row_req = mysqli_num_rows($list_result);
                        while ($value = mysqli_fetch_assoc($list_result)) {
                        ?>
                            <tr>
                                <td><?= $value['id']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['username']; ?></td>
                                <td style="max-width: 200px;"><?= $value['firstname'] . ' ' . $value['lastname']; ?></td>
                                <td><?= $value['address']; ?></td>
                                <td><?= $value['contact']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>

<style>
    #reg-table {
        height: 100%;
        overflow: hidden;
        font-size: 14px;
        font-family: 'Lato', sans-serif;
        line-height: 1.6;
    }
</style>