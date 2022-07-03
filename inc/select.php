<?php
$sql ='SELECT * FROM users ORDER BY RAND() LIMIT 1';
$resault = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($resault,MYSQLI_ASSOC);

?>