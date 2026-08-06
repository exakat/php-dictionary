# array\_fill()
``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``. 

Literal values are copied, while objects are only copied at the reference level: the same object occupies all the requested slots, they are not cloned or made distinct in any way.

``array_fill()`` may easily lead to memory exhaustion, given ``$count`` is large enough.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_fill.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_fill.html","name":"array_fill()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_fill().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [range()](range.ini.html)
+ [array\_pad()](array_pad.ini.html)
