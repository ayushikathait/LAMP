<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
    	$email = $_POST['email'];
    	$gender = $_POST['gender'];
    	$city = $_POST['city'];
       
   	$sql = "INSERT INTO 'users' ('username', 'email, 'gender', 'city') VALUES( '$username', '$email', '$gender', '$city')";
   	mysqli_query($conn, $sql);
 }

else{
    echo "Please Fill The Form and Submit By Clicking Submit Button.";
}
?>


<html>
    <head>
        <title>Form</title>
        <style>
            div{
                width:400px;
                height:300px;
                padding:20px;
                margin-left:36%;
                border:5px solid lightblue;
                float:center;
            }
        </style>
    </head>
    <body>
        <div>
        <form method="POST" action="form.php">
            Username <input type="text" name="username" placeholder="Enter Your Username" required><br><br>
            Email <input type="email" name="email" placeholder="Enter Your E-mail address" required><br><br>
            Gender :  
            <input type="radio" name="gender" value="M" checked>Male
            <input type="radio" name="gender" value="F">Female
            <input type="radio" name="gender" value="O">Others<br><br>
            Select Your City - <select name="city" required>
                <option value="Dehradun" selected>Dehradun</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Lucknow">Lucknow</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="Submit your data">
        </form>
        </div>
    </body>
</html>
