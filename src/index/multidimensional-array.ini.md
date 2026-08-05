# Multidimensional Array
An array inside an array is called a multidimensional array. Dimensions may be created as many as necessary, by using the square brackets.

PHP creates the arrays on the fly. When the intermediate array are undefined, PHP will add them in the structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/multidimensional-array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/multidimensional-array.ini.html","name":"Multidimensional Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:30:12 +0000","dateModified":"Thu, 23 Jul 2026 13:30:12 +0000","description":"An array inside an array is called a multidimensional array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Multidimensional Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = array(1 => array('a' => 1));

$a[1]["b"]['c'] = 3;

print_r($a);

/*
Array
(
    [1] => Array
        (
            [a] => 1
            [b] => Array
                (
                    [c] => 3
                )

        )

)
*/
?>
```

**[Documentation](https://www.php.net/manual/en/function.array.php)**
## Related

+ [Array, []](array.ini.html)
+ [Array Element](array-element.ini.html)
+ [Index For Arrays](index-array.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [array\_keys()](array_keys.ini.html)
+ [count()](count.ini.html)
+ [Dot Notation](dot-notation.ini.html)
