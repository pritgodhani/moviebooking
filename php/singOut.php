
<?php
session_start();


session_destroy();
session_write_close();

header('location: http://localhost/js_curd_2/html/index.html');


?>