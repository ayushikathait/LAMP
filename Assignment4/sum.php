<html>
    <head>
        <title>Addition of Two Numbers</title>
    </head>
    <body>
        <form method="POST" action="sum.php">
            Number 1 <input type="number" name="num1" required>
            Number 2 <input type="number" name="num2" required><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>


<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
    echo "Sum of two numbers is ".$sum;
}
else{
    echo "No data submitted yet. Click submit to submit the form.";
}
?>
