<table>
    <thead>
        <td style="border: 1px solid #000;">index</td>
        <td style="border: 1px solid #000;">condition</td>
        <td style="border: 1px solid #000;">stepper</td>
    </thead>
    <tbody>
<?php

# for
# start? condition? stepper?
for($i = 0; $i <= 10;)
{
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>✅</td>";
    echo "<td>++</td>";
    echo "</tr>";
    $i += 5;
}

    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>❌</td>";
    echo "<td>++</td>";
    echo "</tr>";

echo "</tbody>";
echo "</table>";

echo "<hr>";

$colors = ['red', 'violet', 'blue', 'rose', 'green', 'fushia', 'yellow', 'brown', 'black'];

for($i = 0; $i < count($colors); $i++)
{
    echo $colors[$i] . '<br>';
}

echo '<hr>';

# foreach
foreach($colors as $color)
{
    echo $color . '<br>';
}

echo '<hr>';

$data = [
    'colors' => ['red', 'green', 'blue'],
    'cars'   => ['audi', 'mercedes', 'ford'],
    'brands' => ['apple', 'lenovo', 'samsung'],
];

for($i = 0; $i < count($data); $i++)
{
    $key = array_keys($data)[$i];
    echo "<h5>$key</h5>";

    for($j = 0; $j < count($data[$key]); $j++)
    {
        echo '<span>' . $data[$key][$j] . '------</span>';
    }
}

echo '<hr>';

foreach($data as $heading => $data)
{
    echo "<h5>$heading</h5>";
    foreach($data as $value)
    {
        echo '<span>' . $value . '------</span>';
    }
}

echo '<hr>';

# while
$i = 0;
while($i < count($colors))
{
    echo $colors[$i] . '<br>';
    $i++;
}

echo '<hr>';

# dowhile
$i = 99;
do {
    echo "$i <br>";
    $i++;
}
while($i <= 10);