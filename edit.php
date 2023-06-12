<?php include "connection.php"; 
$id =$_GET['id'];
$sql= "SELECT * FROM worker WHERE id = '$id'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="style.css">

    <div class="box">
        <form action="" method="post">
            <label for="workername">Username:</label>
            <input name="workername" id="workername" value="<?php echo $row  ['workername'] ?>" type="text" placeholder="Enter your name" >

            <label for="workerage">age:</label>
            <input name="workerage" id="workerage" value="<?php echo $row  ['workerage'] ?>" type="number" placeholder="Enter your age" >
            
            
            <label for="phonenumber">Mobile Number:</label>
            <input name="phonenumber" id="phonenumber" value="<?php echo $row  ['phonenumber'] ?>" type="text" placeholder="Enter your mobile number" >
            
        
            <label for="email">Email:</label>
            <input name="email" id="email" type="email" value="<?php echo $row  ['email'] ?>" placeholder="Enter your email" >
            
        
            
            <button class="update" name="update" >Edit</button>
            <button ><a href="add.php">Back</a></button>
        </form>
    </div>

    <!-- database data edit update  -->

    <?php
        if(isset($_POST['update'])){
            $name=$_POST['workername'];
            $age =$_POST['workerage'];
            $phone =$_POST['phonenumber'];
            $email = $_POST['email'];
             

            $sql = "UPDATE `worker` SET `workername`='$name' , `workerage`='$age' , `phonenumber`='$phone' , `email`='$email' WHERE id='$id'" ;
            $result = $conn->query($sql);
            
            if($result){
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