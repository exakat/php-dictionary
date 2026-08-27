# array\_pad()
``array_pad()`` is a PHP native function which completes an array up to ``$length`` elements with a specified ``$value``. When ``$length`` is positive, the padding is to the right, and when ``$length`` is negative, it is a padding to the left.

Literal values are copied, while objects are only copied at the reference level: the same object occupies all the requested slots; they are not cloned or made distinct in any way.

``array_fill()`` may easily lead to memory exhaustion, given ``$count`` is large enough.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pad.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pad.html","name":"array_pad()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:17 +0000","dateModified":"Wed, 19 Aug 2026 06:47:17 +0000","description":"array_pad() is a PHP native function which completes an array up to $length elements with a specified $value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pad.html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_fill.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-pad.php"},{"@type":"CreativeWork","name":"The Power of PHP\u2019s array_pad() Function","url":"https:\/\/clouddevs.com\/php\/array_pad-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_pad"}]}]}</script>
```php
<?php

    $array = [1];
    $array = array_pad($array, 3, 2); 
    $array === [1, 2, 2];
    
    $array = [1];
    $array = array_pad($array, -3, 4); 
    $array === [4, 4, 1];
    
    $x = new stdClass();
    $x->i = 1;
    
    $array = array_pad([], 2, $x);
    $array[1]->i = 3;
    echo $array[0]->i; // also 3 

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-pad.php)**
## See Also

+ [The Power of PHP’s array_pad() Function](https://clouddevs.com/php/array_pad-function/)

## Related

+ [range()](range.html)
+ [array\_fill()](array_fill.html)
