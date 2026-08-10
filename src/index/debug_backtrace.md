# debug\_backtrace()
``debug_backtrace()`` is a PHP native function that generates a backtrace.

``debug_backtrace()`` is used for inline debugging, or to collect more information before logging errors.

``debug_backtrace()`` returns a dataset concerning the current situation of execution. It does not display anything: that function is either custom made, or devoted to ``debug_print_backtrace()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debug_backtrace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debug_backtrace.html","name":"debug_backtrace()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``debug_backtrace()`` is a PHP native function that generates a backtrace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debug_backtrace().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"debug_backtrace()"}]}]}</script>
```php
<?php

    function foo() {
        print_r(debug_backtrace());
        /** 
        Array
(
    [0] => Array
        (
            [file] => /tmp.php
            [line] => 7
            [function] => foo
            [args] => Array
                (
                )

        )

)
*/
    }
    
    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/function.debug-backtrace.php)**
## See Also

+ [debug_print_backtrace](https://www.php.net/manual/en/function.debug-print-backtrace.php)

## Related

+ [print\_r()](print_r.html)
+ [Trace](trace.html)
+ [var\_dump()](var_dump.html)
