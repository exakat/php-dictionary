# Callstack
Every time a function, or method, is called, PHP enters a new context. When the function call is finished, PHP exits that context. To keep track of the previous contexts, PHP stores them in a stack: that way, it pops the last context, and goes on.

The callstack is usually not visible explicitly. It may be accessed with the function ``debug_print_backtrace()``, for debugging purposes. 

The callstack is an important element of the execution path of PHP. In particular, the callstack should not be too deep. There are also means to limit the depth of the callstack, to avoid running into infinite recursions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callstack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callstack.html","name":"Callstack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"Every time a function, or method, is called, PHP enters a new context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Callstack.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"callstack"}]}]}</script>
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

+ [Stack](stack.html)
+ [Backtrace](backtrace.html)
+ [Debug](debug.html)
+ [Depth](depth.html)
