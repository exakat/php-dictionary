# Try-catch
Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw. It may be completed with a finally block.

The catch clause may be anonymous, when it only specify the type of caught exception, without providing a variable name.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html","name":"Try-catch","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Try-catch.html"]}],"alternateName":["try"],"keywords":["keyword"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finally.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argumentcounterror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-chain.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli_sql_exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fatal-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.exceptions.php"},{"@type":"CreativeWork","name":"PHP: Try and Catch me if you can!","url":"https:\/\/medium.com\/@erlandmuchasaj\/php-try-and-catch-me-if-you-can-824bc6bb6698"},{"@type":"CreativeWork","name":"How to Implement Try Catch Finally Blocks in PHP","url":"https:\/\/rollbar.com\/blog\/php-try-catch-finally\/"},{"@type":"CreativeWork","name":"A PHP Pattern To Avoid Try\/Catch Blocks Repetition","url":"https:\/\/medium.com\/better-programming\/a-php-pattern-to-avoid-try-catch-blocks-repetition-1e3fe2038dc1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"try-catch"}]}]}</script>
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

+ [Finally](finally.html)
+ [Anonymous Catch](anonymous-catch.html)
+ [ArgumentCountError](argumentcounterror.html)
+ [ArithmeticError Error](arithmeticerror.html)
+ [Catch](catch.html)
+ [Error](error.html)
+ [Chaining Exceptions](exception-chain.html)
+ [Exception Handler](exception-handler.html)
+ [Exception](exception.html)
+ [mysqli\_sql\_exception](mysqli_sql_exception.html)
+ [PHP Predefined Exception](predefined-exception.html)
+ [throw](throw.html)
+ [Fatal Error](fatal-error.html)
+ [Resource Leak](resource-leak.html)
