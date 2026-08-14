# throw
Throw is the keyword which raises an exception.

When an exception is thrown, the normal flow of the program is interrupted, and PHP starts looking for an exception handler to catch and handle the exception.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html","name":"throw","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:51:00 +0000","dateModified":"Tue, 11 Aug 2026 20:51:00 +0000","description":"Throw is the keyword which raises an exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"throw"}]}]}</script>
```php
<?php
try{
    throw new Exception('Error');
} catch (\Exception $e) {
    print 'Warning : error was identified!';
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.exceptions.php)**
## See Also

+ [Exceptions - PHP Advance](https://jobtensor.com/Tutorial/PHP/en/Exceptions)

## Related

+ [Try-catch](try-catch.html)
+ [Exception](exception.html)
+ [ArgumentCountError](argumentcounterror.html)
+ [ArithmeticError Error](arithmeticerror.html)
+ [Error](error.html)
+ [Chaining Exceptions](exception-chain.html)
+ [mysqli\_sql\_exception](mysqli_sql_exception.html)
+ [PHP Predefined Exception](predefined-exception.html)
+ [Jump](jump.html)
+ [Method Compatibility](method-compatibility.html)
+ [Return Value](return-value.html)
