<?php
    if(isset($_GET['delete_payments'])){
        $delete_id=$_GET['delete_payments'];

        $delete_payments="Delete from `user_payments` where order_id=$delete_id";
        $result_payments=mysqli_query($con,$delete_payments);
        if($result_payments){
            echo "<script>alert('Order deleted successfully')</script>";
            echo "<script>window.open('./index.php?list_payments','_self')</script>";
        }
    }
?>