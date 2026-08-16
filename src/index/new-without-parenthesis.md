# New Without Parenthesis
The ``new`` operator may be called without using the parenthesis after the class name.

The parenthesis are necessary when the constructor requires at least one argument. They are optional when no argument is necessary.

It is usually recommended to always use the parenthesis, to keep the syntax consistent across various situations.

This should not be confused with chaining new without parenthesis, where the parenthesis are enclosing the ``new`` call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-without-parenthesis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-without-parenthesis.html","name":"New Without Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:45 +0000","dateModified":"Fri, 19 Jun 2026 21:25:45 +0000","description":"The new operator may be called without using the parenthesis after the class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/New Without Parenthesis.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"new-without-parenthesis"}]}]}</script>
```php
<?php

class X { } // no constructor, no argument

new X;
new X();
new X(2); // possible, but useless

class Y { 
    function __construct($i = 0) {}
} 

new Y;
new Y();
new Y(2); 

class Z { 
    function __construct($h, $i = 0) {}
} 

new Y(1);
new Y(1, 2);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## Related

+ [new](new.html)
+ [\_\_invoke() Method](__invoke.html)
+ [Chaining New Without Parenthesis](chaining-new-without-parenthesis.html)
