<?php

// permissions
// read
// write

// where? container -> linux os -> apache
// who?   www-data
// echo get_current_user() . '<br>';
// echo shell_exec('whoami');

#   permission.       meaning.        number.
#       r              read             4
#       w           write/change        2
#       x           execute/use         1
#=============================================
#      rwx       read/write/execute   4+2+1=7
#
#    owner | group  | everyone else
#      7       7            7        read/write/execute for everyone
#      7       5            5        owner rwx, rx, rx => -|---|---|---

# ls -lsah
# -l long format
# -s show allocated size in blocks
# -a show hidden files
# -h human readable sizes
echo '<pre>' . shell_exec('ls -lsah') . '</pre>';

/*
total 8.0K
   0 drwxr-xr-x  3 www-data www-data  96 Sep 18 23:54 .
   0 drwxr-xr-x 23 www-data www-data 736 Sep 18 19:12 ..
4.0K -rw-r--r--  1 www-data www-data 775 Sep 19 00:10 index.php
4.0K -rw-r--r--  1 www-data www-data 775 Sep 19 00:13 permissions.php
   | |---+++--- -- -------  ------- ---- ------------ date file-name
   | | |  |  |   |    |        |     └─ file size
   | | |  |  |   |    |        └─ group
   | | |  |  |   |    └─ owner
   | | |  |  |   └─ hard link count
   | | |  |  └─ everyone else's permissions
   | | |  └─ group permissions
   | | └─ owner permissions
   | └─ type + permission (type [- for file/d for directories]) rwxrwxrwx 421
   └─ allocated disk blocks/space
*/