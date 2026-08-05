# Array Element
An array element is a piece of data, stored at an index in the array. 

An array element may of any type, and it may be also repeated, unlike the array index.

The array element is also called an item. It is often named ``$value``, in a loop, as a blind variable.

When an array is a list, the elements are all of the same type. When an array is a hash, 

Array elements are not typed at the language level. They may be typed for static analysis tools, via the phpdoc syntax.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-element.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-element.ini.html","name":"Array Element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An array element is a piece of data, stored at an index in the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array Element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$array = ['a' => 1, 'b' => 3, 'c' => 5];
while(list($key, $value) = each($array)) {
    print $key . ' => ' . $value . PHP_EOL;
}

?>
```

**[Documentation](https://www.php.net/manual/en/function.each.php)**
## Related

+ [Index For Arrays](index-array.ini.html)
+ [each](each.ini.html)
+ [Loops](loop.ini.html)
+ [Blind Variable](blind-variable.ini.html)
+ [Hash](hash.ini.html)
+ [Multidimensional Array](multidimensional-array.ini.html)
+ [Readable](readable.ini.html)
+ [Writable](writable.ini.html)
+ [Writeable](writeable.ini.html)
