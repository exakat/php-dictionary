# mb\_substr()
``mb_substr()`` extracts a portion of a string, counting positions in characters rather than in bytes, so it works correctly on multibyte text such as UTF-8.

The function takes a start position and an optional length, both counted in characters: a negative start counts from the end of the string, and a negative length stops that many characters before the end, the same conventions used by ``substr()``. Unlike ``substr()``, which can cut a multi-byte character in half and produce invalid text, ``mb_substr()`` always returns whole characters.

The encoding is normally taken from the internal encoding configured with ``mb_internal_encoding()``, but it can also be passed explicitly as a fourth argument, which is safer in code that may run under different default encodings.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mb_substr.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mb_substr.html","name":"mb_substr()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 18:46:46 +0000","dateModified":"Fri, 25 Sep 2026 18:46:46 +0000","description":"mb_substr() extracts a portion of a string, counting positions in characters rather than in bytes, so it works correctly on multibyte text such as UTF-8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mb_substr.html"]}],"keywords":["native function","string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/substr.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mbstring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.mb-substr.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mb_substr"}]}]}</script>
```php
<?php

    $text = 'Héllo Wörld';

    echo mb_substr($text, 0, 5);   // 'Héllo'
    echo mb_substr($text, -5);     // 'Wörld'
    echo substr($text, 0, 5);      // mangled: cuts a multi-byte character

?>
```

**[Documentation](https://www.php.net/manual/en/function.mb-substr.php)**
## Related

+ [substr()](substr.html)
+ [Multibyte String](mbstring.html)
+ [Encoding](encoding.html)
+ [Unicode](unicode.html)
