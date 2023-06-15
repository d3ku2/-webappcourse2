<form action="" method="POST">
    <textarea name="s" id=""></textarea>
    <input type="submit" value="Next"><br>
</form>

<?php
if (isset($_POST['s'])) {
    $s = $_POST['s'];
    $str = count(mb_str_split(str_replace(' ', '', $s)));
    $valuesCount = array_count_values(mb_str_split(str_replace(' ', '', $s)));
    foreach ($valuesCount as $key => $item) {
        echo $key.' - '.round(100 / $str * $item, 2).'%'.'<br>';
    }
}
?>