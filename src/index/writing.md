# Writing
Writing is the action to replace a value in a data container with another one. It does not need to be read. The value is simply changed.

Writing happens when a value is being assigned a new value, used with some operators such as ``++`` or ``--``. 

This operation is usually the counterpart of reading. It may also happen at the same time.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writing.html","name":"Writing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 08:54:05 +0000","dateModified":"Thu, 27 Aug 2026 08:54:05 +0000","description":"Writing is the action to replace a value in a data container with another one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writing.html"]}],"alternateName":["write"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reading.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Assignment_(computer_science)"},{"@type":"CreativeWork","name":"Assignment operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.assignment.php"},{"@type":"CreativeWork","name":"Incrementing\/Decrementing Operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.increment.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"writing"}]}]}</script>
```php
<?php

    $x = 1; // writing 1
    
    ++$x; // reading 1 and writing 2 
    
    echo $x; // reading 2

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Assignment_(computer_science))**
## See Also

+ [Assignment operators](https://www.php.net/manual/en/language.operators.assignment.php)
+ [Incrementing/Decrementing Operators](https://www.php.net/manual/en/language.operators.increment.php)

## Related

+ [Reading](reading.html)
