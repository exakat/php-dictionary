# Neutral Element
A neutral element is an piece of data which has no effect with a particular operation.

For example, ``0`` is the neutral element for the addition, as ``0 + $a`` is the same as ``$a + 0`` and the same as ``$a``, without any type change.

The neutral element for the multiplication is ``1``; the neutral element for the concatenation is the empty string ``''``. 

It is usually possible to define a neutral element for any operation or method call. For objects, they are call null object, as they could replace the ``null`` scalar value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/neutral-element.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/neutral-element.ini.html","name":"Neutral Element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A neutral element is an piece of data which has no effect with a particular operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Neutral Element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 10;
    
    $a *= 1; // this does nothing
    $a += 1; // this does nothing

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Identity_element)**
## See Also

+ [Null Object Pattern](https://en.wikipedia.org/wiki/Null_object_pattern)

## Related

+ [Null Pattern](nullpattern.ini.html)
