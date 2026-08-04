# Non Breakable Spaces
Space is one of the base ASCII characters. They are often used to separate words, and are forbidden from being used in names. 

PHP supports Unicode characters, and some of the characters are called: non breaking spaces. They behave like a space, by displaying a blank area. Yet, they are recognized internally as a non-space, and can be used in a name.

Non-breakable spaces are useful for tests, as they make the testing name more readable. They are also quite rare, and confusing for newcomers.

Unbreakable spaces is ``\u{00A0}`` as a PHP escape sequence, or ``\xc2\xa0`` as ASCII characters; it is the HTML escape sequence ``&nbsp;``.
```php
<?php

    // This is a space, PHP doesn't compile this code
    const A B = 1;

    // This is a non breakabe space, it compile and is not visibly different from the line above
    const A B = 1;
    echo A B;

?>
```

## See Also

+ [Non breakable space in PHP](https://3v4l.org/ATkWY)
+ [Handling Invisible characters with PHP](https://dev.to/yasserelgammal/handling-invisible-characters-with-php-1507)
+ [Non-Breaking Spaces and UTF-8 Madness](https://www.bigmessowires.com/2021/10/14/non-breaking-spaces-and-utf-8-madness/)
+ [Using non-breakable spaces in test method names](https://mnapoli.fr/using-non-breakable-spaces-in-test-method-names)

Related : [Space](Space), [trim](trim)
