# Array Element
An array element is a piece of data, stored at an index in the array. 

An array element may be of any type, and it may be also repeated, unlike the array index.

The array element is also called an item. It is often named ``$value``, in a loop, as a blind variable.

When an array is a list, the elements are all of the same type. When an array is a hash, the elements may be of different types.

Array elements are not typed at the language level. They may be typed for static analysis tools, via the phpdoc syntax.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html","name":"Array Element","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"An array element is a piece of data, stored at an index in the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"]}],"alternateName":["item"],"keywords":["array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/each.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blind-key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.each.php"},{"@type":"CreativeWork","name":"PHP manual: Arrays","url":"https:\/\/www.php.net\/manual\/en\/language.types.array.php"},{"@type":"CreativeWork","name":"Associative Arrays in PHP: An Overview","url":"https:\/\/www.simplilearn.com\/tutorials\/php-tutorial\/associative-array-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-element"}]}]}</script>
```php
<?php

$array = ['a' => 1, 'b' => 3, 'c' => 5];
while(list($key, $value) = each($array)) {
    print $key . ' => ' . $value . PHP_EOL;
}

?>
```

**[Documentation](https://www.php.net/manual/en/function.each.php)**
## See Also

+ [PHP manual: Arrays](https://www.php.net/manual/en/language.types.array.php)
+ [Associative Arrays in PHP: An Overview](https://www.simplilearn.com/tutorials/php-tutorial/associative-array-in-php)

## Related

+ [Index For Arrays](index-array.html)
+ [each](each.html)
+ [Loops](loop.html)
+ [Blind Variable](blind-key.html)
+ [Hash](hash.html)
+ [Multidimensional Array](multidimensional-array.html)
+ [Readable](readable.html)
+ [Writable](writable.html)
+ [Writeable](writeable.html)
