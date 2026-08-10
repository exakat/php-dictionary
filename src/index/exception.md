# Exception
Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or ``die()`` statements. Exceptions provide a way to separate the normal flow of code from error-handling code, making it easier to manage errors and maintain clean and readable code.

Exceptions are thrown at the point of detection of the issue, and processed somewhere else in the code, when they are caught by a try-catch statement. Ultimately, exceptions block the execution of the application when they are not caught.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html","name":"Exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or ``die()`` statements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Exception.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Exception"}]}]}</script>
```php
<?php

    class X {
        final const X = 1;
    
        final function method() { }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.exceptions.php)**
## See Also

+ [Modern Error handling in PHP](https://netgen.io/blog/modern-error-handling-in-php)
+ [PHP try & catch: what are exceptions and how to handle them?](https://benjamincrozat.com/php-exceptions)
+ [Mastering Exception Handling in PHP: Ensuring Code Resilience](https://dev.to/devmahfuz/mastering-exception-handling-in-php-ensuring-code-resilience-3pk5)
+ [A guide to exception handling in PHP](https://www.honeybadger.io/blog/php-exceptions/)

## Related

+ [throw](throw.html)
+ [Try-catch](try-catch.html)
+ [Chaining Exceptions](exception-chain.html)
+ [RangeException](rangeexception.html)
+ [Anonymous Catch](anonymous-catch.html)
+ [BadFunctioncallException](badfunctioncallexception.html)
+ [Chaining](chaining.html)
+ [DomainException](domainexception.html)
+ [Error Handling](error-handling.html)
+ [Error](error.html)
+ [Chaining Exceptions](chaining-exception.html)
+ [ImagickException](imagickexception.html)
+ [LengthException](lengthexception.html)
+ [PharException](pharexception.html)
+ [PHP Predefined Exception](predefined-exception.html)
+ [SVMException](svmexception.html)
+ [Throwable](throwable.html)
+ [Traversable](traversable.html)
+ [Type Error](typerror.html)
+ [UnexpectedValueException](unexpectedvalueexception.html)
+ [UnhandledMatchError](unhandledmatcherror.html)
+ [OutOfRangeException](outofrangeexception.html)
+ [OverflowException](overflowexception.html)
+ [set\_error\_handler()](set_error_handler.html)
+ [ValueError](valueerror.html)
+ [Fatal Error](fatal-error.html)
+ [PDOException](pdoexception.html)
+ [Resource Leak](resource-leak.html)
+ [Transaction](transaction.html)
+ [ImagickPixelException](imagickpixelexception.html)
+ [Troubleshoot](troubleshoot.html)
+ [Continuation](continuation.html)
+ [Defer Statement](defer.html)
+ [Effect System](effect-system.html)
+ [Result Type](result-type.html)
