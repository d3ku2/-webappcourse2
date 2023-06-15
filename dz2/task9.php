<form action="" method="POST">
    <textarea name="s" id="input" ></textarea>
    <input type="submit" value="number"><br>
</form>
<?php
if (isset($_POST['s'])) {
    $s = $_POST['s'];
    $symbol = strlen($s);
    $words = count(explode(' ', $s));
    $space = count(explode(' ', $s)) - 1;
    echo 'Символов: ' .$symbol. '<br>'. 'Слов: ' .$words. '<br>'. 'Пробелов: '.$space;
}
?>