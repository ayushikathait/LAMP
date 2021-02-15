<?php
include('config.php');
?>

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$contact = $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:edittable.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>EDIT FORM</title>
    </head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"?>">
    USERNAME <input type="text" name="username" value=<?php echo "$username" ?> placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Type Your E-mail" required><br>
    Gender - 
            Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F">
            Other <input type="radio" name="gender" value="O"><br>
    City <select name="city">
        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>Delhi</option>
        <option value="Nanital" <?php if($city=="Nanital"){echo "selected";}?>>Mumbai</option>
        <option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>Goa</option>
        <option value="Lucknow" <?php if($city=="Lucknow"){echo "selected";}?>>Lucknow</option>
    </select><br>
    <input type="submit" name="update" value="Update">
</form>
</body>
</html>
