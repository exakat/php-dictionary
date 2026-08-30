# Multidimensional Array
An array inside an array is called a multidimensional array. Dimensions may be created as many as necessary, by using the square brackets.

PHP creates the arrays on the fly. When the intermediate array are undefined, PHP will add them in the structure.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html","name":"Multidimensional Array","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:21:41 +0000","dateModified":"Sat, 15 Aug 2026 08:21:41 +0000","description":"An array inside an array is called a multidimensional array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html"]}],"keywords":["array","_arrayOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/count.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-notation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array.php"},{"@type":"CreativeWork","name":"array_walk_recursive()","url":"https:\/\/www.php.net\/manual\/en\/function.array-walk-recursive.php"},{"@type":"CreativeWork","name":"json_encode()","url":"https:\/\/www.php.net\/manual\/en\/function.json-encode.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"multidimensional-array"}]}]}</script>
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
## See Also

+ [array_walk_recursive()](https://www.php.net/manual/en/function.array-walk-recursive.php)
+ [json_encode()](https://www.php.net/manual/en/function.json-encode.php)

## Related

+ [Array, []](array.html)
+ [Array Element](array-element.html)
+ [Index For Arrays](index-array.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [array\_keys()](array_keys.html)
+ [count()](count.html)
+ [Dot Notation](dot-notation.html)
