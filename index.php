<?php

// index.php
require_once __DIR__ . '/vendor/autoload.php';

// Data to pass to the included file
$data = [
    ['person' => 'John Doe',
    'age' => 25,
    'location' => 'United States'
    ],
    ['person' => 'Jane Doe',
    'age' => 26,
    'location' => 'Canada'
    ]


];

// Include the file with variables
echo includeWithVariables('temp.php', $data);
