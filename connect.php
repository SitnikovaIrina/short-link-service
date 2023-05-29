<?php

$conn = mysqli_connect('localhost', 'root', '', 'cut-link');

if (!$conn) die("Ошибка подключения к БД: \n" . mysqli_connect_error());
