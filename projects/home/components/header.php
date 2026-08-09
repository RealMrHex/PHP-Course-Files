<?php
$activePage = $_SERVER['REQUEST_URI'];
?>

<header>
    <a class="<?php if($activePage === "/home/") { echo "active"; } ?>" href="/home/">Home</a>
    <a class="<?php if($activePage === "/home/projects/") { echo "active"; } ?>" href="/home/projects">Projects</a>
    <a class="<?php if($activePage === "/home/about/") { echo "active"; } ?>" href="/home/about">About</a>
    <a class="<?php if($activePage === "/home/contact/") { echo "active"; } ?>" href="/home/contact">Contact</a>
</header>