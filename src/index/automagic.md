# Automagic
Automagic is a porte-manteau, merging automatic and magic. Some PHP operations are automagic, meaning that a lot more is process that what it appears.

Such operations are usually yielding surprise and confusion, or are a cherished feature.

Automagic is mostly used as an adverb, automagically.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automagic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automagic.html","name":"Automagic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:51 +0000","dateModified":"Fri, 19 Jun 2026 21:24:51 +0000","description":"Automagic is a porte-manteau, merging automatic and magic","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Automagic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Automagic"}]}]}</script>
```php
<?php

    var_dump(10 === '1e1');  // true
    // PHP automagically converts the string into a number, and 1e1 yields 10. 

    $array = [null => 1, '33' => 2];
    echo $array[0]; // 1
    // PHP converts the NULL into 0
    echo $array[33]; // 2
    // PHP converts numeric strings to strings

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Magic_(programming))**
## Related

+ [Magic Methods](magic-method.html)
+ [Magic Constants](magic-constant.html)
