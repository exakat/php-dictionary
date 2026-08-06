# Debugger
A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code. They provide extra visibility on the internal working of the application, including variable content, 

As there are many tactics to search for a bug, there are many tools available.

The PHP ecosystem of debuggers includes:

+ PHP native functions such as ``var_dump()``, ``print_r()``, ``debug_backtrace()``...
+ PHP external components like ``kint``, ``whoops``, ``krumo``, 
+ Debuggers: interactive PHP Debugger, xdebug, PHP debugger, etc.

Debugging include executing the code step by step, displaying and modifying the content of variables.

Debuggers are integrated into IDE, or work as standalone applications.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/debugger.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/debugger.html","name":"Debugger","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 04:39:27 +0000","dateModified":"Wed, 08 Jul 2026 04:39:27 +0000","description":"A debugger is an extension or an external program that is used to help when searching for bugs or issues in source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Debugger.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Debug](debug.ini.html)
+ [Integrated Environment of Development (IDE)](ide.ini.html)
+ [var\_dump()](var_dump.ini.html)
+ [print\_r()](print_r.ini.html)
+ [Backtrace](backtrace.ini.html)
+ [PHP Editor](php-editor.ini.html)
+ [PHP Profiler](profiler.ini.html)
+ [Tool](tool.ini.html)
