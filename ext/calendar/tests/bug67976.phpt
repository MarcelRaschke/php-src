--TEST--
Bug #67976 (cal_days_month() fails for final month of the French calendar)
--SKIPIF--
<?php
if (!extension_loaded('calendar')) die('skip ext/calendar required');
?>
--FILE--
<?php
var_dump(cal_days_in_month(CAL_FRENCH, 13, 14));
?>
--EXPECT--
int(5)
