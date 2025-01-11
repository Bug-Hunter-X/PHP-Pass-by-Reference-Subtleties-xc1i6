```php
<?php
function increment_array_safe(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
increment_array_safe($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//To avoid accidental modification,  pass by value and return the modified array.
function increment_array_copy($arr) {
  foreach ($arr as &$value) {
    $value++;
  }
  return $arr;
}

$numbers = [1, 2, 3];
$numbers = increment_array_copy($numbers); //reassign the value
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
?>
```