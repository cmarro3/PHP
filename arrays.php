<?php
echo '<title> Arrays</title>';
$colors = array('Red', 'Blue', 'Green');
print_r($colors);
echo '<p>'. $colors[1]. '</p>';
$colors[] = 'yellow';
print_r($colors);

//Assoiative Arrays

$home_towns = array(
    'Joe' => 'Newyork, Newyork',
    'Erin' => 'Chicago, Illinios',
    'Jackie' => 'Exton, MI',
    'Dave' => 'Austin, Texas',
);
echo '<pre>';
print_r($home_towns);
echo '</pre>';

echo '<p>' .$home_towns['Erin']. '</p>';

// Big Array

$brother = array(
    'Joe' => array(
        'age' => 21,
        'job' => 'teacher',
        'state' => 'IL',
    ),
    'Phil' => array(
        'age' => 34,
        'job' => 'cop',
        'state' => 'MI',
    ),
    'Mike' => array(
        'age' => 24,
        'job' => 'firemen',
        'state' => 'PA',
    ),
);

echo '<pre>';
print_r($brother);
echo '</pre>';

echo '<p>' .$brother['Mike']['state']. '</p>';