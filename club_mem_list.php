<?php
    include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>University Club Member</h1>
    <?php
        $sql = "SELECT name,email,address,age,join_date
                FROM members
                ORDER BY join_date DESC;";
        echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Age</th><th>Joined Date</th></tr>";
            $result = mysqli_query($conn, $sql);
            foreach($result as $res)
            {
                echo "<tr><td>" . $res["name"]. "</td><td>" . $res["email"]. "</td><td>" . $res["address"].
                "</td><td>" . $res["age"] . "</td><td>" . $res["join_date"] . "</td></tr>";
            }

            mysqli_close($conn);
            ?>
</body>
</html>