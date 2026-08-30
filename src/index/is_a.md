# is\_a()
``is_a()`` is a PHP native function, that checks if an object is of a specific class. 

Usually, ``is_a()`` is better replaced by ``instanceof``, which is a PHP operator. The function might be needed to create a closure, though.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_a.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_a.html","name":"is_a()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:30:29 +0000","dateModified":"Tue, 04 Aug 2026 11:30:29 +0000","description":"is_a() is a PHP native function, that checks if an object is of a specific class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_a.html"]}],"keywords":["object"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-a.php"},{"@type":"CreativeWork","name":"is_a() versus instanceof","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/is_a_and_instanceof.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is_a"}]}]}</script>
```php
<?php

    $object = (object) ['a' => 1];

    var_dump(is_a($object, stdClass::class));

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-a.php)**
## See Also

+ [is_a() versus instanceof](https://php-tips.readthedocs.io/en/latest/tips/is_a_and_instanceof.html)

## Related

+ [instanceof](instanceof.html)
+ [Type Checking](type-checking.html)
+ [Object](object.html)
+ [Polymorphism](polymorphism.html)
+ [Class](class.html)
+ [is\_object()](is_object.html)
