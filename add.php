<?php include 'connection.php'; ?>
<table border="1px" cellpadding= "5px" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>MobileNumber</th>
        <th>Email</th> 
        <th colspan="3">Action</th>
    </tr>


    <!-- databse display datas -->
    
    
    
    <?php 
        $sql = "SELECT * FROM worker";
        $result =$conn->query($sql);

        if(mysqli_num_rows($result)> 0){
            while($row=mysqli_fetch_assoc($result) ){
                ?>
                <tr> 
                    <td><?php echo $row['workername'];?></td>
                
                    <td><?php echo $row['workerage'];?></td>
            
                
                    <td><?php echo $row['phonenumber'];?></td>
            
                    <td><?php echo $row['email'];?></td>

                    <td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>

                    <td><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return conforim('Are you sure ,you want to delete the data ')">Delete</a></td>
                    <td><a href="index.php">Home</a></td>
                </tr>
                <?php
            }
        }
        else{
            ?>
            <tr> 
                <td>not found datas</td>
            </tr>
            <?php
        }
    ?>
</table>