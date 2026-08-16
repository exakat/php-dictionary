# Dynamic Class
A dynamic class is a class whose fully qualified name is defined at execution time. 

This is convenient for module systems, where the actual class is named from an external configuration.

The name of the class is a string. It may be also accessed with the ``::class`` operator. 

For a dynamic call, the name of the class may or may not start with a ``\`` char: both cases work.

Dynamic class may be used with static calls, class constants, enum cases, static method or static property. Here, the call is static, as it actually does not depends on the object, but on the class of the object. 

It may also be used with the instantiation operator ``new``.

It is also possible to use an object of the same class for all these calls.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class.html","name":"Dynamic Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A dynamic class is a class whose fully qualified name is defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dynamic Class.html"]}],"keywords":["dynamic"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/early-binding.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php"},{"@type":"CreativeWork","name":"How to Dynamically Generate Classes at Runtime in PHP: A Guide to Using __autoload and Avoiding eval() Issues","url":"https:\/\/www.codestudy.net\/blog\/dynamically-generate-classes-at-runtime-in-php\/#google_vignette"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dynamic-class"}]}]}</script>
```php
<?php

    class AB {}
    
    class AC {}
    
    $name = '\A'.(rand(0, 1) ? 'B' : 'C');
    
    $object = new $name;    // creates a class of AB or AC
    $object2 = new $object; // creates another object of AB or AC, same as $object

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## See Also

+ [How to Dynamically Generate Classes at Runtime in PHP: A Guide to Using __autoload and Avoiding eval() Issues](https://www.codestudy.net/blog/dynamically-generate-classes-at-runtime-in-php/#google_vignette)

## Related

+ [new](new.html)
+ [Static Call](static-call.html)
+ [Late Static Binding](late-binding.html)
+ [Early Binding](early-binding.html)
