# ArithmeticError Error
``ArithmeticError`` is thrown when an error occurs while performing mathematical operations. These errors include attempting to perform a bitshift by a negative amount, and any call to ``intdiv()`` that would result in a value outside the possible bounds of an integer. 

Currently, a bitshift is the main source for arithmetic exceptions. The other is division by zero, which is a child class.

``DivisionByZeroError`` is an ``ArithmeticError``. 

When ``ArithmeticError`` are not raised, PHP may return a ``NaN`` value, and ``INF`` value, or also ``0``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html","name":"ArithmeticError Error","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"ArithmeticError is thrown when an error occurs while performing mathematical operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html"]}],"keywords":["exception","error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/divisionbyzeroerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nan.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.arithmeticerror.php"},{"@type":"CreativeWork","name":"Modern Error handling in PHP","url":"https:\/\/netgen.io\/blog\/modern-error-handling-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arithmeticerror"}]}]}</script>
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

+ [throw](throw.html)
+ [Try-catch](try-catch.html)
+ [DivisionByZeroError](divisionbyzeroerror.html)
+ [Not A Number (NAN)](nan.html)
+ [INF](inf.html)
+ [zero](zero.html)
