# Dot Notation
The dot notation refers to a syntax to access deeply-nested elements in arrays. Instead of repeating the classic ``[index]`` notation, dot notation offers a way to chain the indices with dots to reach the value. 

Dot notation is easier to read, in particular when there are numerous elements. 

Dot notation is not a PHP native feature. It is available via independent packages or as feature of frameworks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dot-notation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dot-notation.html","name":"Dot Notation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:31 +0000","dateModified":"Fri, 19 Jun 2026 21:24:31 +0000","description":"The dot notation refers to a syntax to access deeply-nested elements in arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dot Notation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Array, []](array.ini.html)
+ [Multidimensional Array](multidimensional-array.ini.html)

## Related packages

+ [dflydev/dot-access-data](https://packagist.org/packages/dflydev/dot-access-data)
+ [adbario/php-dot-notation](https://packagist.org/packages/adbario/php-dot-notation)
