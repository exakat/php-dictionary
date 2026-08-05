# Try-catch
Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw. It may be completed with a finally block.

The catch clause may be anonymous, when it only specify the type of caught exception, without providing a variable name.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/try-catch.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/try-catch.ini.html","name":"Try-catch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Try-catch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

try {
    callSomeMethod();
} catch (\Exception $e) {
    // process the error here
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.exceptions.php)**
## See Also

+ [PHP: Try and Catch me if you can!](https://medium.com/@erlandmuchasaj/php-try-and-catch-me-if-you-can-824bc6bb6698)
+ [How to Implement Try Catch Finally Blocks in PHP](https://rollbar.com/blog/php-try-catch-finally/)
+ [A PHP Pattern To Avoid Try/Catch Blocks Repetition](https://medium.com/better-programming/a-php-pattern-to-avoid-try-catch-blocks-repetition-1e3fe2038dc1)

## Related

+ [Finally](finally.ini.html)
+ [Anonymous Catch](anonymous-catch.ini.html)
+ [ArgumentCountError](argumentcounterror.ini.html)
+ [ArithmeticError Error](arithmeticerror.ini.html)
+ [Catch](catch.ini.html)
+ [Error](error.ini.html)
+ [Chaining Exceptions](exception-chain.ini.html)
+ [Exception Handler](exception-handler.ini.html)
+ [Exception](exception.ini.html)
+ [mysqli\_sql\_exception](mysqli_sql_exception.ini.html)
+ [PHP Predefined Exception](predefined-exception.ini.html)
+ [throw](throw.ini.html)
+ [Fatal Error](fatal-error.ini.html)
+ [Resource Leak](resource-leak.ini.html)
