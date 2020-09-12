<?php 
if(!$conn_link = mysqli_connect('localhost','root','1234567')){
          echo'Error can not connect to Database!';
exit;
}else{
          mysqli_select_db($conn_link,'test')
}
>