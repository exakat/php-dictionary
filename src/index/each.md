# each
``each()`` was a native function, that would yield each element in an array. It was used in ``while()`` loops, to traverse lists.

It was deprecated during PHP 7.x and it is completely removed in version 8.0.

The classic ``while(list($key, $value) = each($array)`` structure, shown below, is, nowadays, advantageously replaced by a ``foreach()`` loop.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/each.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/each.html","name":"each","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:49:22 +0000","dateModified":"Thu, 23 Jul 2026 13:49:22 +0000","description":"each() was a native function, that would yield each element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/each.html"]}],"keywords":["native function","removed"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.each.php"},{"@type":"CreativeWork","name":"PHP each() Function","url":"https:\/\/www.zetcode.com\/php-array\/each\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"each"}]}]}</script>
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

+ [PHP each() Function](https://www.zetcode.com/php-array/each/)

## Related

+ [Array Element](array-element.html)
