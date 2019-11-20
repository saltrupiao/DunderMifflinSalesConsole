<?php

$sql=mysqli_query("SELECT BCH_ID, BCH_NAME FROM branch");
if (mysqli_num_rows($sql)) {
    //echo '<select name="filter" class="custom-select mb-3" required>';
    //echo '<option selected></option>';
    $select='<select name="filter" class="custom-select mb-3" required>';
    while ($i=mysqli_fetch_array($sql)) {
        $select.='<option value="'.$i['BCH_ID'].'">'.$i['BCH_NAME'].'</option>';
        //echo '<option value="'.$i['BCH_ID'].'">'.$i['BCH_NAME'].'</option>';
    }
};
$select.='</select>';
echo $select;

?>