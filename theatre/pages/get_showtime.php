<?php
 include('../../connection.php');
    $result=$conn->query("SELECT * FROM tbl_show_time where screen_id='".$_POST['screen']."'");
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row['st_id'];?>"><?php echo $row['name']."( ".$row['start_time']." )";?></option>
            <?php
        }
    }
    else {
        ?>
        <option disabled>No Show time added in selected screen</option>
        <?php
    }
    ?>