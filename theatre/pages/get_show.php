<?php
    extract($_POST);
    include('../../connection.php');
    $w=mysqli_query($conn,"select * from tbl_show_time where screen_id='$id'");
    ?>
    <option value="0">Select Show</option>
    <?php
    while($sh=mysqli_fetch_array($w))
    {
        ?>
        <option value="<?php echo $sh['st_id'];?>"><?php echo $sh['name'];?></option>
        <?php
    }
?>