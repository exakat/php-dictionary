# Callstack
Everytime a function, or method, is called, PHP enters a new context. When the functioncall is finished, PHP exit that context. To keep track of the previous contexts, PHP stores them in a stack: that way, it pops the last context, and go on. 

The callstack is usually not visible explicitly. It may be accessed with the function ``debug_print_backtrace()``, for debugging purposes. 

The callstack is an important element of the execution path of PHP. In particular, the callstack should not be too deep. There are also means to limit the depth of the callstack, to avoid running into infinite recursions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/callstack.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/callstack.ini.html","name":"Callstack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Everytime a function, or method, is called, PHP enters a new context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Callstack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo() {
    goo();
}

function goo() {
    hoo();
}

function hoo() {
    debug_print_backtrace();
}

foo();

// Displays 
// #0 /in/lkZjr(8): hoo()
// #1 /in/lkZjr(4): goo()
// #2 /in/lkZjr(15): foo()
?>
```

**[Documentation](https://en.wikipedia.org/wiki/Call_stack)**
## See Also

+ [PHP: debug_backtrace vs. debugger call stack](https://medium.com/@rob.fulwell/php-debug-backtrace-vs-debugger-call-stack-e13dbeebde71)

## Related

+ [Stack](stack.ini.html)
+ [Backtrace](backtrace.ini.html)
+ [Debug](debug.ini.html)
+ [Depth](depth.ini.html)
