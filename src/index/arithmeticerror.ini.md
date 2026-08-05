# ArithmeticError Error
``ArithmeticError`` is thrown when an error occurs while performing mathematical operations. These errors include attempting to perform a bitshift by a negative amount, and any call to ``intdiv()`` that would result in a value outside the possible bounds of an integer. 

Currently, a bitshift is the main source for arithmetic exceptions. The other is division by zero, which is a child class.

``DivisionByZeroError`` is an ``ArithmeticError``. 

When ``ArithmeticError`` are not raised, PHP may return a ``NaN`` value, and ``INF`` value, or also ``0``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arithmeticerror.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arithmeticerror.ini.html","name":"ArithmeticError Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``ArithmeticError`` is thrown when an error occurs while performing mathematical operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ArithmeticError Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// ArithmeticError is catchable
try {
    8 >> -1;
} catch (ArithmeticError) {
    print 'Cannot do a negative shift';
}

try {
    10 / 0;
} catch (DivisionByZeroError) { // or DivisionByZeroError
    print 'Cannot divide by 0';
}

print sqrt(-10); // NaN

print log(0); // -INF

?>
```

**[Documentation](https://www.php.net/manual/en/class.arithmeticerror.php)**
## See Also

+ [Modern Error handling in PHP](https://netgen.io/blog/modern-error-handling-in-php)

## Related

+ [throw](throw.ini.html)
+ [Try-catch](try-catch.ini.html)
+ [DivisionByZeroError](divisionbyzeroerror.ini.html)
+ [Not A Number (NAN)](nan.ini.html)
+ [INF](inf.ini.html)
+ [zero](zero.ini.html)
