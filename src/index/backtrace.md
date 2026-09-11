# Backtrace
A backtrace is a snapshot of the callstack at a specific point in the program's execution. This is typically needed when an error or exception occurs.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtrace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtrace.html","name":"Backtrace","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:18:51 +0000","dateModified":"Thu, 10 Sep 2026 20:18:51 +0000","description":"A backtrace is a snapshot of the callstack at a specific point in the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtrace.html"]}],"keywords":["debug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debugger.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callstack.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.debug-backtrace.php"},{"@type":"CreativeWork","name":"debug_print_backtrace","url":"https:\/\/www.php.net\/manual\/en\/function.debug-print-backtrace.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backtrace"}]}]}</script>
```php
<?php

    function migrate() {
        trumpet();
    }

    function trumpet() {
        debug_print_backtrace();
    }

    migrate();

    /**
    #0 /in/a4eQc(3): trumpet()
    #1 /in/a4eQc(10): migrate()
    */

?>
```

**[Documentation](https://www.php.net/manual/en/function.debug-backtrace.php)**
## See Also

+ [debug_print_backtrace](https://www.php.net/manual/en/function.debug-print-backtrace.php)

## Related

+ [Debugger](debugger.html)
+ [Callstack](callstack.html)

## Related packages

+ [spatie/backtrace](https://packagist.org/packages/spatie/backtrace)
+ [axy/backtrace](https://packagist.org/packages/axy/backtrace)
