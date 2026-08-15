# Fallback To Global
The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing. 

This feature was introduced as a transition mechanism, when namespaces were introduced. Adding a namespace to a file does not make all the function and constants invalid, but rather still working. This does not apply to classes, interfaces, traits and enumeration, which have to be in the current namespace, or imported with the ``use`` expression.

The fallback mechanism applies to global constants and functions. 

This mechanism is usually transparent to users. It introduces the possibility of a man in the middle attack: adding a local definition to a global function or constant will overwrite this function.

There is a penalty cost to use the fallback mechanism, as PHP has to search for the function locally, then globally, before finding it. Using the fully qualified name, or an import expression ``use`` speeds up the process.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-to-global.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-to-global.html","name":"Fallback To Global","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fallback To Global.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fallback-to-global"}]}]}</script>
```php
<?php

    namespace {
        function goo() { echo __FUNCTION__;}
        function hoo() { echo __FUNCTION__;}
    }
    
    namespace A {
        use function hoo as ioo;
        
        function foo() { echo __FUNCTION__;}
        function hoo() { echo __FUNCTION__;}
        
        foo(); // A\foo;
        goo(); // goo;
        hoo(); // A\hoo;
        \hoo(); // hoo
        ioo(); // A\hoo;
    
        // this replaces the native PHP strtolower with another function, 
        // in the A namespace
        function strtolower($string) { return \strtoupper($string);}
        
        echo strtolower('aB');  // AB
        echo \strtolower('aB'); // ab
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.fallback.php)**
## See Also

+ [Using namespaces: fallback to global function/constant](http://semantic-portal.net/php-language-reference-namespaces-global-function)

## Related

+ [global Scope](global.html)
+ [Functions](function.html)
+ [Fallback](fallback.html)
