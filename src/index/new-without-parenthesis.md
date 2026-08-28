# New Without Parenthesis
The ``new`` operator may be called without using the parenthesis after the class name.

The parenthesis are necessary when the constructor requires at least one argument. They are optional when no argument is necessary.

It is usually recommended to always use the parenthesis, to keep the syntax consistent across various situations.

This should not be confused with chaining new without parenthesis, where the parenthesis are enclosing the ``new`` call.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-without-parenthesis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-without-parenthesis.html","name":"New Without Parenthesis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 09:58:58 +0000","dateModified":"Wed, 26 Aug 2026 09:58:58 +0000","description":"The new operator may be called without using the parenthesis after the class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-without-parenthesis.html"]}],"keywords":["feature","object"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__invoke.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-new-without-parenthesis.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php"},{"@type":"CreativeWork","name":"New without parentheses in PHP 8.4","url":"https:\/\/stitcher.io\/blog\/new-with-parentheses-php-84"},{"@type":"CreativeWork","name":"PHP 8.4: New Without Parentheses \u2014 A Small Syntax Change with Big Impact","url":"https:\/\/medium.com\/codetodeploy\/php-8-4-new-without-parentheses-a-small-syntax-change-with-big-impact-94e265b47afe"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"new-without-parenthesis"}]}]}</script>
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
## See Also

+ [New without parentheses in PHP 8.4](https://stitcher.io/blog/new-with-parentheses-php-84)
+ [PHP 8.4: New Without Parentheses — A Small Syntax Change with Big Impact](https://medium.com/codetodeploy/php-8-4-new-without-parentheses-a-small-syntax-change-with-big-impact-94e265b47afe)

## Related

+ [new](new.html)
+ [\_\_invoke() Method](__invoke.html)
+ [Chaining New Without Parenthesis](chaining-new-without-parenthesis.html)
