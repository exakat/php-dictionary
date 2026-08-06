# debug\_backtrace()
``debug_backtrace()`` is a PHP native function that generates a backtrace.

``debug_backtrace()`` is used for inline debugging, or to collect more information before logging errors.

``debug_backtrace()`` returns a dataset concerning the current situation of execution. It does not display anything: that function is either custom made, or devoted to ``debug_print_backtrace()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/debug_backtrace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/debug_backtrace.html","name":"debug_backtrace()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``debug_backtrace()`` is a PHP native function that generates a backtrace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/debug_backtrace().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [print\_r()](print_r.ini.html)
+ [Trace](trace.ini.html)
+ [var\_dump()](var_dump.ini.html)
