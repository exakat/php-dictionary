# Debugger
A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code. They provide extra visibility on the internal working of the application, including variable content.

As there are many tactics to search for a bug, there are many tools available.

The PHP ecosystem of debuggers includes:

+ PHP native functions such as ``var_dump()``, ``print_r()``, ``debug_backtrace()``...
+ PHP external components like ``kint``, ``whoops``, ``krumo``
+ Debuggers: interactive PHP Debugger, xdebug, PHP debugger, etc.

Debugging includes executing the code step by step, displaying and modifying the content of variables.

Debuggers are integrated into IDEs, or work as standalone applications.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debugger.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debugger.html","name":"Debugger","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:52:02 +0000","dateModified":"Tue, 11 Aug 2026 20:52:02 +0000","description":"A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Debugger.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"debugger"}]}]}</script>
```php
<?php

    // simple debug system with native PHP print_r
    print_r($_GET);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Debugger)**
## See Also

+ [Xdebug](https://www.xdebug.org/)
+ [Interactive PHP Debugger](https://www.php.net/manual/en/book.phpdbg.php)
+ [Kint](https://github.com/kint-php/kint)
+ [Whoops](https://github.com/filp/whoops)
+ [Krumo](http://krumo.kaloyan.info/)
+ [Quo](https://github.com/Protoqol/Quo)
+ [buggregator](https://buggregator.dev/)

## Related

+ [Debug](debug.html)
+ [Integrated Environment of Development (IDE)](ide.html)
+ [var\_dump()](var_dump.html)
+ [print\_r()](print_r.html)
+ [Backtrace](backtrace.html)
+ [PHP Editor](php-editor.html)
+ [PHP Profiler](profiler.html)
+ [Tool](tool.html)
