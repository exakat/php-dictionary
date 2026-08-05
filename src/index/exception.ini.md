# Exception
Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or ``die()`` statements. Exceptions provide a way to separate the normal flow of code from error-handling code, making it easier to manage errors and maintain clean and readable code.

Exceptions are thrown at the point of detection of the issue, and processed somewhere else in the code, when they are caught by a try-catch statement. Ultimately, exceptions block the execution of the application when they are not caught.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/exception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/exception.ini.html","name":"Exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:19:32 +0000","dateModified":"Thu, 09 Jul 2026 07:19:32 +0000","description":"Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or ``die()`` statements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Exception.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [throw](throw.ini.html)
+ [Try-catch](try-catch.ini.html)
+ [Chaining Exceptions](exception-chain.ini.html)
+ [RangeException](rangeexception.ini.html)
+ [Anonymous Catch](anonymous-catch.ini.html)
+ [BadFunctioncallException](badfunctioncallexception.ini.html)
+ [Chaining](chaining.ini.html)
+ [DomainException](domainexception.ini.html)
+ [Error Handling](error-handling.ini.html)
+ [Error](error.ini.html)
+ [Chaining Exceptions](chaining-exception.ini.html)
+ [ImagickException](imagickexception.ini.html)
+ [LengthException](lengthexception.ini.html)
+ [PharException](pharexception.ini.html)
+ [PHP Predefined Exception](predefined-exception.ini.html)
+ [SVMException](svmexception.ini.html)
+ [Throwable](throwable.ini.html)
+ [Traversable](traversable.ini.html)
+ [Type Error](typerror.ini.html)
+ [UnexpectedValueException](unexpectedvalueexception.ini.html)
+ [UnhandledMatchError](unhandledmatcherror.ini.html)
+ [OutOfRangeException](outofrangeexception.ini.html)
+ [OverflowException](overflowexception.ini.html)
+ [set\_error\_handler()](set_error_handler.ini.html)
+ [ValueError](valueerror.ini.html)
+ [Fatal Error](fatal-error.ini.html)
+ [PDOException](pdoexception.ini.html)
+ [Resource Leak](resource-leak.ini.html)
+ [Transaction](transaction.ini.html)
+ [ImagickPixelException](imagickpixelexception.ini.html)
+ [Troubleshoot](troubleshoot.ini.html)
+ [Continuation](continuation.ini.html)
+ [Defer Statement](defer.ini.html)
+ [Effect System](effect-system.ini.html)
+ [Result Type](result-type.ini.html)
