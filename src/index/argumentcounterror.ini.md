# ArgumentCountError
``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method. This is an error, not an exception.

No exception is raised for extra parameters, as those may still be processed by the method itself.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/argumentcounterror.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/argumentcounterror.ini.html","name":"ArgumentCountError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ArgumentCountError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo($a) {}

// No error is raised here
foo(1,2);

// ArgumentCountError is catchable
try {
    foo();
} catch (ArgumentCountError) {
    print 'No enough parameters passed.';
}
?>
```

**[Documentation](https://www.php.net/manual/en/class.argumentcounterror.php)**
## See Also

+ [Tutorial: Solve PHP uncaught ArgumentCountError: Too few arguments to function](https://www.bestwebframeworks.com/tutorials/php/153/solve-php-uncaught-argumentcounterror-too-few-arguments-to-function/)

## Related

+ [throw](throw.ini.html)
+ [Try-catch](try-catch.ini.html)
