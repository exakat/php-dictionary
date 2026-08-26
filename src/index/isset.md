# Isset
``isset()`` is a function that determines if a variable is declared and is different than ``null``.

``isset()`` is also related to the magic method ``__isset()``, which is used to determine if a property in an object exists or not. 

``isset()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.

``isset()`` may be compared to ``array_key_exists()`` to check if an index exists in an array. As a micro-optimisation, it is faster than the function.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/isset.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/isset.html","name":"Isset","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"isset() is a function that determines if a variable is declared and is different than null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/isset.html"]}],"keywords":["language construct","feature","keyword","error suppression"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__isset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_exists.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.isset.php"},{"@type":"CreativeWork","name":"isset vs empty vs is_null","url":"https:\/\/phppot.com\/php\/isset-vs-empty-vs-is_null\/"},{"@type":"CreativeWork","name":"isset(), empty() And the Magic Methods","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/isset-empty-valued.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"isset"}]}]}</script>
```php
<?php

    $var = 'something';
    
    if (isset($var)) {
        echo 'The variable $var contains '.$var;
    } else {
        echo 'No such variable as $var';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.isset.php)**
## See Also

+ [isset vs empty vs is_null](https://phppot.com/php/isset-vs-empty-vs-is_null/)
+ [isset(), empty() And the Magic Methods](https://php-tips.readthedocs.io/en/latest/tips/isset-empty-valued.html)

## Related

+ [Magic Methods](magic-method.html)
+ [\_\_isset() Method](__isset.html)
+ [array\_key\_exists()](array_key_exists.html)
+ [Empty](empty.html)
+ [Existence](existence.html)
