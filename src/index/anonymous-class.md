# Anonymous Class
A class may be instantiated, without defining a class name. The class is identical to a named-class, except for the name attribute. This also means that it cannot be used for typing, though it may be typed itself, using its parent class or implemented interfaces.

Also, arguments may be passed at instantiation time, unlike with named-class definition, where those arguments are passed when calling ``new``, not when defining the class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-class.html","name":"Anonymous Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:21 +0000","dateModified":"Tue, 11 Aug 2026 14:42:21 +0000","description":"A class may be instantiated, without defining a class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Anonymous Class.html"]}],"keywords":["structure","anonymous","cite"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.anonymous.php"},{"@type":"CreativeWork","name":"PHP Anonymous Class","url":"https:\/\/www.phptutorial.net\/php-oop\/php-anonymous-class\/"},{"@type":"CreativeWork","name":"PHP 7.0 - Anonymous Classes","url":"https:\/\/blog.programster.org\/php7-0-anonymous-classes"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"anonymous-class"}]}]}</script>
```php
<?php

    interface I {}

    function foo(I $a) {}

    $a = new class () implements I {};

    foo($a);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.anonymous.php)**
## See Also

+ [PHP Anonymous Class](https://www.phptutorial.net/php-oop/php-anonymous-class/)
+ [PHP 7.0 - Anonymous Classes](https://blog.programster.org/php7-0-anonymous-classes)

## Related

+ [Closure](closure.html)
+ [Anonymous](anonymous.html)
