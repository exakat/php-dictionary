# Star *
``*`` is a character, used in various situations: 

+ Multiplication: ``3 * 2 == 6``
+ Power: ``3 ** 2 == 3 * 3 == 9``
+ With slash, ``/*`` is a multi line comment: ``/* */``
+ With double star and a slash, ``/**`` is a phpdoc comment: ``/** */``.
+ As a wildcard in ``glob()`` calls
+ As a wildcard in ``fnmatch()`` calls
+ As a wildcard for all columns in SQL queries: ``SELECT * FROM table``
+ As a quantifier in regex: 0 or more, i.e. ``/a*/``
+ As part of a multiline comment with ``/** */`` and ``/* */``.

```php
<?php

    file_get_contents('/tmp/test.txt');
    
    echo 2 * 3; // 6 
    echo 2 ** 3; // * 
    
    /*
     A multiline comment
    */

?>
```

Related : [Multiplication](Multiplication), [Comments](Comments), [Exponential](Exponential), [Regular Expression](Regular Expression), [Structured Query Language (SQL)](Structured Query Language (SQL)), [glob()](glob()), [fnmatch()](fnmatch())
