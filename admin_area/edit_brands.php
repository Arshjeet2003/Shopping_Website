<?php
    if(isset($_GET['edit_brands'])){
        $edit_brand=$_GET['edit_brands'];
        $get_brand="Select * from `brands` where brand_id=$edit_brand";
        $result=mysqli_query($con,$get_brand);
        $row=mysqli_fetch_assoc($result);
        $brand_title=$row['brand_title'];
    }
    if(isset($_POST['edit_bran'])){
        $bran_title=$_POST['brand_title'];
        $update_query="update `brands` set brand_title='$bran_title' where brand_id=$edit_brand";
        $result_bran=mysqli_query($con,$update_query);
        if($result_bran){
            echo "<script>alert('Brand updated successfully')</script>";
            echo "<script>window.open('./index.php?view_brands','_self')</script>";
        }
    }
?>
<div class="container mt-5">
    <h1 class="text-center">Edit brand</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brand_title" class="form-label">brand Title</label>
            <input type="text" name="brand_title" id="brand_title" class="form-control"
            required="required" value='<?php echo $brand_title; ?>'>
        </div>
        <input type="submit" value="Update Brand" class="btn btn-info px-3 mb-3" name="edit_bran">
    </form>
</div>