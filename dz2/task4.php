<?php
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
$month = [1=>'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$now = time();
$date = explode('-', date('d-n-Y', $now));
echo $date[0].' '.$month[$date[1]].' '.$date[2].', '.$week[date('w', $now)];