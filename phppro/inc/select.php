<?php
$sql ='SELECT * FROM user';
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
