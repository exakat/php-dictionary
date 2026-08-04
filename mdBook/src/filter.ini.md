# filter
The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data. Give it a string, and check that is satisfy a specific format.

``filter`` works on incoming data, such as ``$_GET`` or ``$_POST``, but also on free variables.
```php
<?php

$data = [
    'age' => '123 years',
    'name'  => 'John Doe',
];

$filters = [
    'age'   => FILTER_VALIDATE_INT,
    'name'   => FILTER_SANITIZE_ENCODED,
];

print_r(filter_var_array($data, $filters));

?>
```

## See Also

+ [PHP Filter and Filter Constant](https://www.geeksforgeeks.org/php-filter-and-filter-constant/)

Related : [Extensions](Extensions), [Validation](Validation), [Sanitation](Sanitation), [Incoming Data](Incoming Data), [php://filter](php://filter), [Ctype](Ctype), [Email](Email)
