--TEST--
tidy.clean_output test
--EXTENSIONS--
tidy
--INI--
tidy.clean_output=1
--FILE--
<html>
<?php

echo '<p>xpto</p>';

?>
</html>
--EXPECTF--
<!DOCTYPE html%S>
<html>
<head>
<title></title>
</head>
<body>
<p>xpto</p>
</body>
</html>
