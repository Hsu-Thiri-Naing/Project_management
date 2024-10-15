<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Project Management Details</title>
</head>
<body>
    <div class="caption">
        <h2>Project Management</h2>
    </div>
    <div class="homePage">
        <div class="homeImage">
            <img src="project_mgmt.jpg" alt="">
        </div>
        <div class="chartPart">

            <table>
                <tr>
                    <th>Project Name :</th>
                    <th>Project Member Name : </th>
                    <th>Project Start Date : </th>
                    <th>Project End Date : </th>
                    <th>Priority : </th>
                    <th>Description :</th>
                </tr>
                <?php
                $sql = "SELECT * FROM projectmanagement";
                $result = mysqli_query($conn, $sql);
                foreach ($result as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['project_name'] ?></td>
                        <td><?php echo $row['member_id'] ?></td>
                        <td><?php echo $row['start_date'] ?></td>
                        <td><?php echo $row['end_date'] ?></td>
                        <td><?php echo $row['priority'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <a href="index.php">Back</a>
</body>
</html>