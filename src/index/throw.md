# throw
Throw is the keyword which raise an exception. 

When an exception is thrown, the normal flow of the program is interrupted, and PHP starts looking for an exception handler to catch and handle the exception.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/throw.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/throw.html","name":"throw","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Throw is the keyword which raise an exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/throw.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Try-catch](try-catch.ini.html)
+ [Exception](exception.ini.html)
+ [ArgumentCountError](argumentcounterror.ini.html)
+ [ArithmeticError Error](arithmeticerror.ini.html)
+ [Error](error.ini.html)
+ [Chaining Exceptions](exception-chain.ini.html)
+ [mysqli\_sql\_exception](mysqli_sql_exception.ini.html)
+ [PHP Predefined Exception](predefined-exception.ini.html)
+ [Jump](jump.ini.html)
+ [Method Compatibility](method-compatibility.ini.html)
+ [Return Value](return-value.ini.html)
