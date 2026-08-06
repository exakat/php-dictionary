# Backtrace
A backtrace is a snapshot of the callstack at a specific point in the program's execution. This is typically needed when an error or exception occurs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backtrace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backtrace.html","name":"Backtrace","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:01:06 +0000","dateModified":"Tue, 07 Jul 2026 05:01:06 +0000","description":"A backtrace is a snapshot of the callstack at a specific point in the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Backtrace.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo() {
        goo();
    }

    function goo() {
        debug_print_backtrace();
    }

    foo();

    /**
    #0 /in/a4eQc(3): goo()
    #1 /in/a4eQc(10): foo()
    */

?>
```

**[Documentation](https://www.php.net/manual/en/function.debug-backtrace.php)**
## See Also

+ [debug_print_backtrace](https://www.php.net/manual/en/function.debug-print-backtrace.php)

## Related

+ [Debugger](debugger.ini.html)
+ [Callstack](callstack.ini.html)

## Related packages

+ [spatie/backtrace](https://packagist.org/packages/spatie/backtrace)
+ [axy/backtrace](https://packagist.org/packages/axy/backtrace)
