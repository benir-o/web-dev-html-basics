<?php
$my_array = array(
    array("Roy", "Joy", "Marvin"),
    array("Sheila", "Mary", "Tom")
);

echo "<pre>";
print_r($my_array);
$data = [
    "Games" => ['Jaime', 'Stark', 'Lanister'],
    "Black Mirror" => ["Nannete", "Selma", "Karin"]
];

print_r($data);

echo "</pre>";

foreach ($data as $key => $value) {
    echo "The value is" . $value . "";
}
