# Error
The ``Error`` class is a base class for all internal PHP error exceptions. It represents an error that occurs during the execution of PHP code. The Error class extends the built-in Throwable interface, making it possible to catch and handle these error exceptions using try-catch blocks.

The Error class has several child classes that represent specific types of errors. Some common child classes include:

+ ParseError: represents a syntax error that occurs during parsing of PHP code
+ TypeError: represents a type-related error, such as passing an incorrect argument type to a function or method
+ DivisionByZeroError: represents an error that occurs when dividing a number by zero
+ OutOfMemoryError: represents an error that occurs when the PHP process runs out of memory

See the example that demonstrates catching and handling a ``ParseError`` below. In the example, the ``eval()`` function is used to evaluate a string of PHP code. However, the code contains a syntax error with a missing semicolon. This results in a ParseError being thrown. We use a try-catch block to catch the ParseError exception, and then display the error message using the ``getMessage()`` method.

It's important to note that these errors are only thrown by internal PHP errors. User-generated errors, e.g., triggered using the ``trigger_error()`` function, are not instances of the Error class. Instead, they are represented by the ErrorException class, which extends Exception.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html","name":"Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:54:19 +0000","dateModified":"Wed, 15 Jul 2026 13:54:19 +0000","description":"The ``Error`` class is a base class for all internal PHP error exceptions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Error"}]}]}</script>
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

+ [Exception](exception.html)
+ [throw](throw.html)
+ [Try-catch](try-catch.html)
+ [ParseError](parseerror.html)
+ [TypeError](typeerror.html)
+ [DivisionByZeroError](divisionbyzeroerror.html)
+ [Throwable](throwable.html)
+ [Traversable](traversable.html)
+ [UnhandledMatchError](unhandledmatcherror.html)
+ [Downtime](downtime.html)
+ [Fatal Error](fatal-error.html)
+ [Notice](notice.html)
+ [ValueError](valueerror.html)
+ [Warning](warning.html)
+ [Error Suppression](error-suppression.html)
+ [html\_errors](html_errors.html)
+ [Lint, Won't Execute](lint-wont-execute.html)
+ [Troubleshoot](troubleshoot.html)
