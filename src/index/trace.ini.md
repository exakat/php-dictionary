# Trace
A trace is the list of called functions during an execution. It lists all the code that was executed, and helps with debugging.

A trace is automatically calculated with an exception, or the function ``debug_backtrace()``. This shows the stack trace at the error point.

Other tools, like xDebug or php-trace, build the callgraph over the execution of the whole code, not only on errors.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/trace.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/trace.ini.html","name":"Trace","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:11:58 +0000","dateModified":"Thu, 02 Jul 2026 08:11:58 +0000","description":"A trace is the list of called functions during an execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Trace.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function c() {
        throw new Exception(Something went wrong);
    }
    function a() { b(); }
    function b() { c(); }
    
    a();
    
    /**
    Fatal error: Uncaught Exception: Something went wrong in file.php:3
    Stack trace:
    #0 file.php(7): c()
    #1 file.php(11): b()
    #2 file.php(14): a()
    #3 {main}
    */

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Stack_trace)**
## See Also

+ [Chris-Kol/php-trace](https://github.com/Chris-Kol/php-trace)

## Related

+ [debug\_backtrace()](debug_backtrace.ini.html)
+ [Audit Trail](audit-trail.ini.html)
+ [Xdebug](xdebug.ini.html)
+ [Flame Graph](flamegraph.ini.html)
+ [Monitoring](monitoring.ini.html)
+ [Troubleshoot](troubleshoot.ini.html)
