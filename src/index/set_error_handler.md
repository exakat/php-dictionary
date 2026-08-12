# set\_error\_handler()
``set_error_handler()`` is a native PHP function, which replaces the default error handler from PHP with a custom one.

``set_error_handler()`` is often used for custom logging, user-friendly or user-facing error messages, and debugging with extra details.

``set_error_handler()`` takes a custom function, or closure, that is called upon encountering a triggered error: such errors are raised by code execution, or trigger manually with ``trigger_error()``. 

``set_error_handler()`` takes list of handled type of errors: for example, ``E_WARNING`` configures the custom handler to be called only for warnings. All other errors will be passed to the PHP default handler. In other words, each successive call of ``set_error_handler()`` replaces the preceding one.

The callback in ``set_error_handler()`` must terminate the script, with ``exit``, if needed. When that callback returns, the code execution continues.

The callback in ``set_error_handler()`` returns a boolean. When it returns ``true``, the warning is supposed to be handled, and PHP won't process it further. When it returns ``false``, the warning is also processed by PHP, on top of the custom handler: in particular, the error message will be displayed, according to configuration. 

``set_error_handler()`` does not handle ``Error``, such as fatal error: they must be execution errors. 

``set_error_handler()`` does not handle ``Exception``, which are handled by ``try-catch-finally`` structures. 

``set_error_handler()`` may be reverted to default with ``restore_error_handler()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set_error_handler.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set_error_handler.html","name":"set_error_handler()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:18:12 +0000","dateModified":"Mon, 13 Jul 2026 09:18:12 +0000","description":"set_error_handler() is a native PHP function, which replaces the default error handler from PHP with a custom one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set_error_handler().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"set_error_handler"}]}]}</script>
```php
<?php

    function myHandler(
        int $errno,
        string $errstr,
        string $errfile = '',
        int $errline = 0,
        array $errcontext = []
    ): bool {
        print 'A warning was detected: '.$errstr;
        
        return true;
    }
    
    set_error_handler(myHandler(...), E_USER_WARNING);
    
    trigger_error('hello!', E_USER_WARNING);
    
    // PHP only
    trigger_error('World!', E_USER_NOTICE);

?>
```

**[Documentation](https://www.php.net/manual/en/function.set-error-handler.php)**
## See Also

+ [How to Convert PHP Errors, Notices & Warnings into Exceptions: Enhance Debugging Flow with set_error_handler](https://www.w3tutorials.net/blog/convert-errors-notices-warnings-into-exceptions/)

## Related

+ [Try-catch](try.html)
+ [trigger\_error()](trigger_error.html)
+ [Exception](exception.html)
+ [PHP Handlers](handler.html)
+ [Exit](exit.html)
+ [display\_errors](display_errors.html)
+ [Error Reporting](error_reporting.html)
