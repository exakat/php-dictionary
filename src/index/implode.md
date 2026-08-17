# implode()
The ``implode()`` function is used to join elements of an array into a glue, placed between each element.

``implode()`` uses the first argument as the separator, and the second as the array. In older versions of PHP, this order could be reversed, but it recommended to avoid using it, as that feature was removed.

``implode()`` has an alias called ``join()``.

``implode()`` converts the elements of the array to string before merging them in a string. In particular, objects are converted to string with the magic-method, and sub-arrays are converted to ``Array``, with a warning. Backed enumerations are not usable with that function.

``implode()`` is faster to concatenate multiple strings than accumulating the concatenations in a single string. This happens because there is less need to allocate memory piecemeal.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implode.html","name":"implode()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The implode() function is used to join elements of an array into a glue, placed between each element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implode().html"]}],"keywords":["native function","micro-optimisation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concatenation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-optimisation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.implode.php"},{"@type":"CreativeWork","name":"How to use implode() in PHP (with examples)","url":"https:\/\/tinkerwell.app\/blog\/how-to-use-implode-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"implode"}]}]}</script>
```php
<?php

declare(strict_types=1);

class x {
    function __toString() {
        return 'c';
    }
}

$x = new x();
echo implode('a', ['a', 'b', new x()]);

?>
```

**[Documentation](https://www.php.net/manual/en/function.implode.php)**
## See Also

+ [How to use implode() in PHP (with examples)](https://tinkerwell.app/blog/how-to-use-implode-in-php)

## Related

+ [Concatenation \\.](concatenation.html)
+ [Micro-optimisation](micro-optimisation.html)
+ [Separator](separator.html)
