# Numeric String
A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric, integer or float. 

Some of such strings are obvious, and commonly used: ``123`` or ``'45.67'``. HereDocs string may also be a numeric string. 

Non numeric strings are mostly obvious too, such as: ``abc`` or ``'中文'``. 

Then, there are some various cases: 

+ '123db': leading strings, starting with digits and finished by non-digit characters are converted as much as possible.
+ '2e3': the exponent is recognized: when ``e``, is between two digit, the float notation is used. This is 2000.
+ '+00', '-10': leading ``+`` and ``-`` are handled. There can only be one, unlike for hardcoded integers.
+ ' 20 ': leading and trailing spaces, tabulations, new lines, new feed are omitted. 
+ ``str_repeat('0', 10001).2``: PHP tries to convert as much as possible. Leading 0 will basically be ignored, however numerous they are.
+ ``(int) str_repeat('1', 10001)``: PHP returns 0 when conversion fails
+  ``str_repeat('1', 10001) + 0``: PHP returns ``INF`` when the conversion fails and is silent.
+ '三' or 3 in Chinese, 'CM' or 1500 in Roman: other ways of counting are not recognized

A string may be checked with the ``is_numeric()`` function. It cannot be checked with ``is_int()`` and ``is_float()``.
```php
<?php

    var_dump(is_numeric('中文'));

?>
```

## See Also

+ [PHP Internals News: Episode 62: Saner Numeric Strings](https://derickrethans.nl/phpinternalsnews-62.html)
+ [PHP Integers, Floats, and Number Strings](https://code.tutsplus.com/php-integers-floats-and-number-strings--cms-32048t)

Related : [Leading Numeric String](Leading Numeric String), [Number](Number)
