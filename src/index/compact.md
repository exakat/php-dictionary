# compact()
``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names.

It is the opposite of ``extract()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact.html","name":"compact()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:49:40 +0000","dateModified":"Wed, 26 Aug 2026 10:49:40 +0000","description":"compact() is a native PHP function, which creates an array containing variables and their values, from a list of variable names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact.html"]}],"keywords":["native","native function","arbitrary number of argument"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stubs.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.compact.php"},{"@type":"CreativeWork","name":"``compact()`` function in PHP, and why it is problematic due to its magic behavior","url":"https:\/\/gist.github.com\/Ocramius\/c56a8e8ff25a8e0bd96800c41edab02a"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"compact"}]}]}</script>
```php
<?php

    $a = '1';
    $b = '2';
    
    $array = compact('a', 'b');
    // ['a' => 1, 'b' => 2];

?>
```

**[Documentation](https://www.php.net/manual/en/function.compact.php)**
## See Also

+ [``compact()`` function in PHP, and why it is problematic due to its magic behavior](https://gist.github.com/Ocramius/c56a8e8ff25a8e0bd96800c41edab02a)

## Related

+ [extract()](extract.html)
+ [Variable Variables](variable-variable.html)
+ [Compact Array](compact-array.html)
+ [Stubs Files](stubs.html)
