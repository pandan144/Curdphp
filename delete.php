<!-- database data delete  -->

<?php include "connection.php"; 
$id =$_GET['id'];
$sql= "DELETE  FROM worker WHERE id = '$id'";
 $conn->query($sql);
if( $conn->query($sql) === true){
    // echo $data;
    ?>
    <script>
        alert("data delete is success")
        window.open("http://localhost/crud/add.php","_self");
    </script>
   <?php
}
else{
    ?>
       <script>
           alert(" try agin")
       </script>
      <?php
       
   }
?>