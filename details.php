<?php
include 'dbConection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="./Js/movement.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="box">
        <div class="container">
            <table class="table-striped">
                <table class="table caption-top">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">CHANGE</th>
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Data should be inserted here -->
                        <?php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $name = $row['name'];
                                $email = $row['email'];
                                $password = $row['password'];

                                echo "<tr>
                <td>" . $name . "</td>
                <td>" . $email . "</td>
                <td>" . $password . "</td>
                                <td>
    <a href='Updatethedatas.php?Update_id=" . $row['id'] . "' class='text-primary offset-md-3' title='Edit'>
        <i class='bi bi-pen-fill'></i>
    </a>
</td>
<td>
    <a href='Deletethedatas.php?Delete_id=" . $row['id'] . "' class='text-danger offset-md-3' title='Delete'>
        <i class='bi bi-x-square-fill'></i>
    </a>
</td>
            </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>


</body>

</html>