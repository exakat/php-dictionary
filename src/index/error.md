# Error
The ``Error`` class is a base class for all internal PHP error exceptions. It represents an error that occurs during the execution of PHP code. The Error class extends the built-in Throwable interface, making it possible to catch and handle these error exceptions using try-catch blocks.

The Error class has several child classes that represent specific types of errors. Some common child classes include:

+ ParseError: represents a syntax error that occurs during parsing of PHP code
+ TypeError: represents a type-related error, such as passing an incorrect argument type to a function or method
+ DivisionByZeroError: represents an error that occurs when dividing a number by zero
+ OutOfMemoryError: represents an error that occurs when the PHP process runs out of memory

See the example that demonstrates catching and handling a ``ParseError`` below. In the example, the ``eval()`` function is used to evaluate a string of PHP code. However, the code contains a syntax error with a missing semicolon. This results in a ParseError being thrown. We use a try-catch block to catch the ParseError exception, and then display the error message using the ``getMessage()`` method.

It's important to note that these errors are only thrown by internal PHP errors. User-generated errors, e.g., triggered using the ``trigger_error()`` function, are not instances of the Error class. Instead, they are represented by the ErrorException class, which extends Exception.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error.html","name":"Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:54:19 +0000","dateModified":"Wed, 15 Jul 2026 13:54:19 +0000","description":"The ``Error`` class is a base class for all internal PHP error exceptions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    try {
        eval('echo Hello, World!'); // Missing semicolon generates a ParseError
    } catch (ParseError $e) {
        echo 'Caught ParseError: ' . $e->getMessage();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.error.php)**
## See Also

+ [PHP Types of Errors](https://www.geeksforgeeks.org/php/php-types-of-errors/)

## Related

+ [Exception](exception.ini.html)
+ [throw](throw.ini.html)
+ [Try-catch](try-catch.ini.html)
+ [ParseError](parseerror.ini.html)
+ [TypeError](typeerror.ini.html)
+ [DivisionByZeroError](divisionbyzeroerror.ini.html)
+ [Throwable](throwable.ini.html)
+ [Traversable](traversable.ini.html)
+ [UnhandledMatchError](unhandledmatcherror.ini.html)
+ [Downtime](downtime.ini.html)
+ [Fatal Error](fatal-error.ini.html)
+ [Notice](notice.ini.html)
+ [ValueError](valueerror.ini.html)
+ [Warning](warning.ini.html)
+ [Error Suppression](error-suppression.ini.html)
+ [html\_errors](html_errors.ini.html)
+ [Lint, Won't Execute](lint-wont-execute.ini.html)
+ [Troubleshoot](troubleshoot.ini.html)
