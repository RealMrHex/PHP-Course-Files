<?php

$firstName  = 'Armin';
$lastName   = 'Hooshmand';
$dob        = 'March 8, 2001';
$stack      = 'Web Developer';
$seniority  = 'Senior';
$location   = 'Tehran, Iran';
$email      = 'talk@arminnotes.com';
$avatarURL  = 'https://www.arminnotes.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.ea3e4b35.jpg&w=64&q=90';
$hr         = '<hr>';
$avatar     = "<center><img src=\"$avatarURL\"></center>";

$biography  = "<i>$firstName $lastName</i> is a <i>$seniority $stack</i>
based in <i>$location</i>.<br>Born on <i>$dob</i>,
<i>$firstName</i> is passionate about delivering high-quality work,
continuously learning, and embracing new challenges.
With a strong commitment to excellence and professional growth,
he strives to create meaningful results
and make a positive impact.
For inquiries or collaboration opportunities,
<i>$firstName</i> can be reached at <a href=\"mailto:$email\"><i>$email</i></a>";

echo "<style>
body {
    background-color: #151515;
    color: whitesmoke;
}

i {
    color: #1e74ff;
}

img {
    width: 48px;
    border-radius: 100%;
    border: 1.5px solid #08090b;
}
</style>";

echo $avatar;
echo $hr;
echo $biography;

// echo "$avatar $hr $biography";