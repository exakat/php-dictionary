# ini\_set()
``ini_set()`` is a PHP native function which can change PHP directive, during execution. This is useful to make a specific limit different, depending on the part of the application which runs. It might also be a security problem, when directives are used to protect the system, and are lifted with this function. However, some directives cannot be changed by this function, such as ``disable_classes`` for example.

The impact of ``ini_set()`` only applies to the current request. It will be reset to its default value with the next request.

The complement to this function is ``ini_get()``, which collect the value of a directive without changing it; and ``ini_restore()``, which reset the directives to their initial value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini_set.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini_set.html","name":"ini_set()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"ini_set() is a PHP native function which can change PHP directive, during execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini_set().html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php.ini.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_execution_time.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.ini-set.php"},{"@type":"CreativeWork","name":"The ini_set Function","url":"https:\/\/code.mu\/en\/php\/manual\/conf\/ini_set\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ini_set"}]}]}</script>
```php
<?php

    print ini_get('memory_limit'); // for example 128M

    ini_set('memory_limit', '1024M'); // now, 1 Gb

?>
```

**[Documentation](https://www.php.net/manual/en/function.ini-set.php)**
## See Also

+ [The ini_set Function](https://code.mu/en/php/manual/conf/ini_set/)

## Related

+ [php\\.ini](php.ini.html)
+ [Directives](directive.html)
+ [max\_execution\_time](max_execution_time.html)
