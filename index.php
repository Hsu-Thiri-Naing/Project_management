<?php
require_once('config.php');
$sql = "SELECT * FROM members";
$members = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Project Management</title>
</head>

<body>
    <div class="caption">
        <h2>Project Management</h2>
    </div>
    <div class="homePage">
        <div class="homeImage">
            <img src="project_mgmt.jpg" alt="">
        </div>
        <div class="formPart">
            <form action="processPage.php" method="post">
                <table>
                    <tr>
                        <td> <label for="pjname">Project Name</label></td>
                        <td> <input type="text" name="pjName" id="pjname" placeholder="type project name"></td>
                    </tr>
                    <tr>
                        <td><label for="assTo">Assigned to</label></td>

                        <td></td>
                        <select name="asiName" id="assTo">
                          <option value="0">----Choose----</option>
                            <?php
                             while ( $member = mysqli_fetch_assoc($members)):
                            ?>

                            <option value="<?php echo $member['id']?>">
                                <?php echo $member['name']?>
                            </option>
                            <?php endwhile; ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="sDate">Start Date</label></td>
                        <td><input type="date" name="sDate" id="sDate"></td>
                    </tr>
                    <tr>
                        <td><label for="eDate">End Date</label></td>
                        <td><input type="date" name="eDate" id="eDate"></td>
                    </tr>
                    <tr>
                        <td><label for="priority">Priority</label></td>
                        <td>
                            <input type="radio" name="p_radio" id="" value="High">
                            <label for="high">High</label>
                            <input type="radio" name="p_radio" id="" value="Average">
                            <label for="average">Average</label>
                            <input type="radio" name="p_radio" id="" value="Low">
                            <label for="low">Low</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="des">Description</label></td>
                        <td><textarea rows="5" cols="50" name="description" id="des"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit"></td>
                        <td><input type="reset" value="Reset"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>