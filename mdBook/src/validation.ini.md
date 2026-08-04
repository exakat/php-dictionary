# Validation
Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are PHP extension and external components to perform validation tasks. 

Validation applies to simple values, such as strings or integer; they also apply to larger structures, like XML, JSON or YAML, where the number of simple value is high.

Validation is also called filtering.
```php
<?php

    if (intval($string) > 0) {
        print "The string is an integer";
    }

?>
```

## See Also

+ [PHP Form Validation](https://www.geeksforgeeks.org/php-form-validation/)

Related : [Sanitation](Sanitation), [Parse](Parse), [Parser](Parser), [Schema](Schema), [Specification](Specification), [filter](filter), [parse_url()](parse_url()), [is_array()](is_array()), [is_bool()](is_bool()), [is_int()](is_int()), [is_string()](is_string()), [Refinement Type](Refinement Type)
