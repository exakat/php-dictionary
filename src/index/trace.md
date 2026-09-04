# Trace
A trace is the list of called functions during an execution. It lists all the code that was executed, and helps with debugging.

A trace is automatically calculated with an exception, or the function ``debug_backtrace()``. This shows the stack trace at the error point.

Other tools, like Xdebug or php-trace, build the callgraph over the execution of the whole code, not only on errors.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trace.html","name":"Trace","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 13:36:07 +0000","dateModified":"Tue, 25 Aug 2026 13:36:07 +0000","description":"A trace is the list of called functions during an execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trace.html"]}],"alternateName":["stack-trace"],"keywords":["monitoring"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debug_backtrace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/audit-trail.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xdebug.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flamegraph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monitoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/troubleshoot.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Stack_trace"},{"@type":"CreativeWork","name":"Chris-Kol\/php-trace","url":"https:\/\/github.com\/Chris-Kol\/php-trace"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"trace"}]}]}</script>
```php
<?php

    function c() {
        throw new Exception('Something went wrong');
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

+ [debug\_backtrace()](debug_backtrace.html)
+ [Audit Trail](audit-trail.html)
+ [Xdebug](xdebug.html)
+ [Flame Graph](flamegraph.html)
+ [Monitoring](monitoring.html)
+ [Troubleshoot](troubleshoot.html)
