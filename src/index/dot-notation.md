# Dot Notation
The dot notation refers to a syntax to access deeply-nested elements in arrays. Instead of repeating the classic ``[index]`` notation, dot notation offers a way to chain the indices with dots to reach the value. 

Dot notation is easier to read, in particular when there are numerous elements. 

Dot notation is not a PHP native feature. It is available via independent packages or as a feature of frameworks.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-notation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dot-notation.html","name":"Dot Notation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:58:33 +0000","dateModified":"Tue, 11 Aug 2026 20:58:33 +0000","description":"The dot notation refers to a syntax to access deeply-nested elements in arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dot Notation.html"]}],"keywords":["feature","non-native"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Property_(programming)"},{"@type":"CreativeWork","name":"Dot Notation","url":"https:\/\/medium.com\/@assertchris\/dot-notation-3fd3e42edc61"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dot-notation"}]}]}</script>
```php
<?php

// example from https://github.com/adbario/php-dot-notation

$array['info']['home']['address'] = 'Kings Square';

echo $array['info']['home']['address'];

// Kings Square

$dot->set('info.home.address', 'Kings Square');

echo $dot->get('info.home.address');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Property_(programming))**
## See Also

+ [Dot Notation](https://medium.com/@assertchris/dot-notation-3fd3e42edc61)

## Related

+ [Array, []](array.html)
+ [Multidimensional Array](multidimensional-array.html)

## Related packages

+ [dflydev/dot-access-data](https://packagist.org/packages/dflydev/dot-access-data)
+ [adbario/php-dot-notation](https://packagist.org/packages/adbario/php-dot-notation)
