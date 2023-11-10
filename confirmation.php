<?php
if(empty($_POST['name'])) {
    header("Location: index.php");
} else {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $issueType=$_POST['issueType'];
    $comments=$_POST['comments'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thank you!</title>
</head>
<body>
    <h1>Thank you!</h1>
    <h2>Your response has been received as shown below:</h2>
    <table>
        <tr>
            <td>Name:</td>
            <td>
                <?php echo($_POST['name']); ?>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <?php echo($_POST['email']); ?>
            </td>
        </tr>
        <tr>
            <td>Reason:</td>
            <td>
                <?php echo($_POST['issueType']); ?>
            </td>
        </tr>
        <tr>
            <td>Comments:</td>
            <td>
                <?php echo($_POST['comments']); ?>
            </td>
        </tr>
    </table>
</body>
</html>