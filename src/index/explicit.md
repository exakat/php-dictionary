# Explicit
A feature is explicit when its presence is represented in the source code.

For example, a default value for an argument is not explicit: it may be omitted, and still be used. It is called implicit. 

If that same value is written in the calling code, even if the passed value is the same as the default value, it is now explicit, and may be read in the calling code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explicit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explicit.html","name":"Explicit","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:29:21 +0000","dateModified":"Sun, 09 Aug 2026 13:29:21 +0000","description":"A feature is explicit when its presence is represented in the source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Explicit.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/skoop.dev\/blog\/2025\/08\/08\/explicit-code\/"},{"@type":"CreativeWork","name":"Default parameter values","url":"https:\/\/www.php.net\/manual\/en\/functions.arguments.php#functions.arguments.default"},{"@type":"CreativeWork","name":"Named arguments","url":"https:\/\/www.php.net\/manual\/en\/functions.arguments.php#functions.named-arguments"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"explicit"}]}]}</script>
```php
<?php

    function foo($a = 1) {}
    
    // implicit call
    foo();
    
    // explicit calls
    foo(1);  
    foo(3);

?>
```

**[Documentation](https://skoop.dev/blog/2025/08/08/explicit-code/)**
## See Also

+ [Default parameter values](https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default)
+ [Named arguments](https://www.php.net/manual/en/functions.arguments.php#functions.named-arguments)

## Related

+ [Implicit](implicit.html)
