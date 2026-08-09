<?php

// Include
// Include Once

// Require
// Require Once
#---------------------#

# MERGE fileA.php -> fileB.php 
#---------------------#

echo 'Hello from Index';
echo '<br>';
require 'a.php';
require_once 'a.php';

require 'za.php';
require_once 'za.php';
echo '<br>';

include 'a.php';
include_once 'a.php';

include 'za.php';
include_once 'za.php';

echo 'Bye from Index';
echo '<br>';


/**
 * 
 * home
 * |-pages             ..
 * |-|-projects        ..
 * |-|-|-foo.php 
 * |-|-|-sabzlearn.php .. || "/home/pages/projects/"
 * |-components
 * |-|-header
 * |-|-|-index.php
 * 
 * 
 * ../../../components/header/index.php
 * 
 * 
 * ./foo.php
 * 
 * 
 * ROOT     = /         | /home/
 * ROOT->?  = /pages... | /pages/...
 * back     = ../../../ | back/back/back/?
 * 
 * 
 */