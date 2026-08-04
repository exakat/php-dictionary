# Backed Enum
Backed enums are enumeration which a string or integer equivalent for each of its cases. Each equivalent, like the cases names, must be distinct. They also must be of the type of the backed enumeration: not type juggling on numeric strings or integers happens.

Non backed enumerations are called unbacked enumerations.
```php
<?php

enum Suits: string {
    case HEART = 'heart';
    case CLUB = 'club';
    case DIAMOND = 'diamond';
    case SPADE = 'spade';
}

enum Prime_digits: int {
    case TWO = 2;
    case THREE = 3;
    case FIVE = 5;
    case SEVEN = 7;
}

?>
```

## See Also

+ [Using PHP Backed Enums in Laravel with Testing](https://dev.to/tegos/using-php-backed-enums-in-laravel-with-testing-1f6)

Related : [Enumeration (enum)](Enumeration (enum)), [Unbacked Enum](Unbacked Enum), [Backed](Backed), [http_build_query()](http_build_query())
