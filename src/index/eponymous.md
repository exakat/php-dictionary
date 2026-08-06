# Eponymous
Eponymous means that it carries the same name. For example, a variable called ``$variable``, or a constant called ``CONSTANT``. 

PHP does not allow every structure to be eponymous. It is not possible to call a class ``class``, but one may call a class anonymous: this won't be eponymous, as an anonymous class doesn't have a name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/eponymous.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/eponymous.html","name":"Eponymous","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:01 +0000","dateModified":"Fri, 19 Jun 2026 21:25:01 +0000","description":"Eponymous means that it carries the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Eponymous.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    const CONSTANT = 'literal';
    
    $variable = CONSTANT;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Eponym)**
## Related

+ [Naming](naming.ini.html)
