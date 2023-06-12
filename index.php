<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="box">
        <form action="" method="post">
            <label for="workername">Username:</label>
            <input name="workername" id="workername" type="text" placeholder="Enter your name" required>

            <label for="workerage">age:</label>
            <input name="workerage" id="workerage" type="number" placeholder="Enter your age" required>
            
            
            <label for="phonenumber">Mobile Number:</label>
            <input name="phonenumber" id="phonenumber" type="text" placeholder="Enter your mobile number" required>
            
        
            <label for="email">Email:</label>
            <input name="email" id="email" type="email" placeholder="Enter your email" required>
            
        
            
            <button class="register" name="submit" type="submit">Register</button>
            <a href="add.php">view</a>
        </form>
    </div>

    <!-- database insert data codes -->

    <?php  

        if(isset($_POST['submit'])){
            $name=$_POST['workername'];
            $age =$_POST['workerage'];
            $phone =$_POST['phonenumber'];
            $email = $_POST['email'];
             

            $sql = "INSERT INTO worker(workername,workerage,phonenumber,email) VALUES ('$name',$age,'$phone','$email')";

            // $data= mysqli_query($con,$query);

            if($conn->query($sql) === TRUE){
                // echo $data;
                ?>
                <script>
                    window.open("http://localhost/crud/add.php","_self");
                </script>
                <?php
            }
            else{
                ?>
                   <script>
                       alert("data is not save ")
                   </script>
                  <?php
                   
               }
        }
    
    ?>
    
</body>
</html>