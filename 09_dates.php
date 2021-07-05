<?php

// Print current date

echo date("d-m-y H:i:s").'<br>';

// Print yesterday

echo date("d-m-y H:i:s",time()- 60*60*24).'<br>';

// Different format: https://www.php.net/manual/en/function.date.php

echo date("F j, Y, g:i:s a").'<br>';

// Print current timestamp

echo time();

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$parseDate = date_parse('05-07-2021 09:00:00');
echo '<pre>';
var_dump($parseDate).'<br>';
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

$dateString = 'July 5 2021 12:33:11';

$parseDate = date_parse_from_format("F j Y h:i:s", $dateString);
echo '<pre>';
var_dump($parseDate).'<br>';
echo '</pre>';
