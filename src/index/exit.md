# Exit
``exit()`` and ``die()`` terminates the current execution.

``exit()`` is a language construct, and since PHP 8.4, it is also a function too. 

After the end of execution, the registered shutdown functions and destructors are executed. ``finally`` blocks are  not executed.

They do not have access to the output stream ``php://output`` anymore, so ``echo`` doesn't work; but it may still write in files or database, if the connection is still open.

``exit()`` uses its argument to return its execution status. It is transmitted to the original caller of the application. When the argument is a string, it is displayed before ending the process.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exit.html","name":"Exit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``exit()`` and ``die()`` terminates the current execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Exit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exit"}]}]}</script>
```php
<?php

    $total = 0;
    for($i = 0; $i < 10; ++$i) {
        $total += $i;
        
        if ($i == 5) {
            exit($total);
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## See Also

+ [PHP | exit( ) Function](https://www.geeksforgeeks.org/php-exit-function/)
+ [PHP | die() & sleep() functions](https://medium.com/@dominic_55284/php-die-sleep-functions-7e766f9900e4)

## Related

+ [Language Construct](language-construct.html)
+ [Shutdown Function](shutdown-function.html)
+ [Destructor](destructor.html)
+ [Finally](finally.html)
+ [Propagation](propagation.html)
+ [Return Value](return-value.html)
+ [set\_error\_handler()](set_error_handler.html)
+ [Testable](testable.html)
