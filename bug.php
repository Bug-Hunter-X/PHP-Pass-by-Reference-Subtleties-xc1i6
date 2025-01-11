```php
<?php
function increment_array(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
increment_array($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$numbers = [1, 2, 3];
$numbers_ref = &$numbers;
increment_array($numbers_ref);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$numbers = [1, 2, 3];
$numbers_ref = $numbers;
increment_array($numbers_ref);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
?>
```