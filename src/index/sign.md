# Sign
A signed expression is an expression that starts with the ``+`` or the ``-`` token. 

``+`` is the default value, and omitted most of the time. When present, it has no impact on the value, except that it forces the conversion to ``float`` or ``int``, depending on the value. It may also yield a type error, if the conversion is not possible.

``-`` is the explicit value, and the most useful. When present, it turns the value into a ``float`` or ``int``, and multiplies it with ``-1``.

PHP tolerates multiple distinct sign tokens: ``+-+-+1`` is the same as ``1``. It is strongly recommended to avoid using it. When an arbitrary number of sign changes must be executed, a multiplication by ``-1`` works well.

The signs are distinct from numeric values: ``-9`` is not ``minus nine``, but rather ``-1 * 9``. This is needed to handle expressions such as ``- ($a * 2)``, where ``-`` applies to the result of the parenthesis. 

It also leads to the unexpected result that ``-3 ** 2 == -9``. In this case, ``**`` power has priority over ``-``, so this is really ``-(3 ** 2) == -9``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sign.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sign.html","name":"Sign","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A signed expression is an expression that starts with the + or the - token","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Sign.html"]}],"keywords":["syntax","math","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/power.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convert.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/digital-signature.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/positive-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/plus.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Sign_(mathematics)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sign"}]}]}</script>
```php
<?php

    $a = 2;
    $b = -$a; // -2
    
    $c = 123.4;
    $d = +$c; // float(123.4)
    
    // Warning
    
    $e = -3 ** 2; // -9
    
    $f = +-+-+-+-+-4; // -4

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Sign_(mathematics))**
## Related

+ [Exponent](power.html)
+ [integer](integer.html)
+ [Floating Point Numbers](float.html)
+ [Cast Operator](cast.html)
+ [Expression](expression.html)
+ [Convert](convert.html)
+ [Digital Signature](digital-signature.html)
+ [Minus -](minus.html)
+ [Positive Integer](positive-integer.html)
+ [Plus +](plus.html)
