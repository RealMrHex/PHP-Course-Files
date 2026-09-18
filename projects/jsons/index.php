<?php

$data = '{"name":"armin"}';

$r = json_decode($data, true);

echo $r['name'];