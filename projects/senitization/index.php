<?php

$badString = "
<a href=\"google.com\">Google.com</a>
<br>
<script>alert('XSS Prevention!');</script>
";

echo strip_tags($badString);
echo '<br>';
echo '<pre>' . htmlspecialchars($badString) . '</pre>';