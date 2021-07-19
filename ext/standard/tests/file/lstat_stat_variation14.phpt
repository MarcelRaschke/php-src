--TEST--
Test lstat() and stat() functions: usage variations - hardlink
--FILE--
<?php
/* test the effects of is_link() on stats of hard link */

$file_path = __DIR__;
require "$file_path/file.inc";


/* create temp file & link */
$filename = "$file_path/lstat_stat_variation14.tmp";
$fp = fopen($filename, "w");  // temp file
fclose($fp);

echo "*** Checking lstat() and stat() on hard link ***\n";
$linkname = "$file_path/lstat_stat_variation14_hard.tmp";
//ensure that link doesn't exists
@unlink($linkname);

// create the link
var_dump( link($filename, $linkname) );
$file_stat = stat($filename);
$link_stat = lstat($linkname);
// compare self stats
var_dump( compare_self_stat($file_stat) );
var_dump( compare_self_stat($link_stat) );
// compare the stat
var_dump( compare_stats($file_stat, $link_stat, $all_stat_keys) );
// clear the stat
clearstatcache();

echo "\n--- Done ---";
?>
--CLEAN--
<?php
$file_path = __DIR__;
unlink("$file_path/lstat_stat_variation14_hard.tmp");
unlink("$file_path/lstat_stat_variation14.tmp");
?>
--EXPECT--
*** Checking lstat() and stat() on hard link ***
bool(true)
bool(true)
bool(true)
bool(true)

--- Done ---
