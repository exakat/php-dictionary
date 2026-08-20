# array\_fill()
``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``. 

Literal values are copied: references are dropped, and the value only is copied. On the other hand, objects are only copied by their reference: the same object occupies all the requested slots, they are not cloned or made distinct in any way.

``array_fill()`` may easily lead to memory exhaustion, given ``$count`` is large enough.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_fill.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_fill.html","name":"array_fill()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:33:38 +0000","dateModified":"Tue, 11 Aug 2026 08:33:38 +0000","description":"array_fill() is a PHP native function which creates an array with $count times a specified $value, starting at integer offset $start_index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_fill().html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pad.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/memory_limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-fill.php"},{"@type":"CreativeWork","name":"Understanding and Implementing PHP's `array_fill()` Function","url":"https:\/\/reintech.io\/blog\/understanding-implementing-php-array-fill-function"},{"@type":"CreativeWork","name":"PHP array_fill( ) Function","url":"https:\/\/medium.com\/@ok4304571\/php-array-fill-function-bde394c4b4d8"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_fill"}]}]}</script>
```php
<?php

    $array = [1, 1, 1];
    $array = array_fill(0, 3, 1); 
    
    $array = [-3 => 2, 2, 2];
    $array = array_fill(-3, 3, 2); 
    
    $x = new stdClass();
    $x->i = 1;
    
    $array = array_fill(0, 2, $x);
    $array[1]->i = 3;
    echo $array[0]->i; // also 3 

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-fill.php)**
## See Also

+ [Understanding and Implementing PHP's `array_fill()` Function](https://reintech.io/blog/understanding-implementing-php-array-fill-function)
+ [PHP array_fill( ) Function](https://medium.com/@ok4304571/php-array-fill-function-bde394c4b4d8)

## Related

+ [range()](range.html)
+ [array\_pad()](array_pad.html)
+ [memory\_limit](memory_limit.html)
+ [Array, []](array.html)
+ [References](reference.html)
