# Eponymous
Eponymous means that it carries the same name. For example, a variable called ``$variable``, or a constant called ``CONSTANT``. 

PHP does not allow every structure to be eponymous. It is not possible to call a class ``class``, but one may call a class anonymous: this won't be eponymous, as an anonymous class doesn't have a name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eponymous.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eponymous.html","name":"Eponymous","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 12:08:25 +0000","dateModified":"Sun, 09 Aug 2026 12:08:25 +0000","description":"Eponymous means that it carries the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Eponymous.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"eponymous"}]}]}</script>
```php
<?php

    const CONSTANT = 'literal';
    
    $variable = CONSTANT;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Eponym)**
## See Also

+ [Basics](https://www.php.net/manual/en/language.variables.basics.php)
+ [Anonymous classes](https://www.php.net/manual/en/language.oop5.anonymous.php)

## Related

+ [Naming](naming.html)
