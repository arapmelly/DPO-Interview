### Write a PHP function that takes an array of integers and returns the sum of all even numbers in the array.

```php
<?php
function sumOfEvenNumbers($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        if ($value % 2 === 0) {
            $sum += $value;
        }
    }
    return $sum;
}

// Example usage:
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenSum = sumOfEvenNumbers($numbers);
echo "Sum of even numbers: $evenSum";
?>

```

In this function:
-   We initialize a variable  `$sum`  to keep track of the sum.
-   We iterate through each element in the input array.
-   If the element is even (i.e., its remainder when divided by 2 is 0), we add it to the sum.
-   Finally, we return the total sum of even numbers.
