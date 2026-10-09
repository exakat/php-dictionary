# strlen()
``strlen()`` returns the number of bytes in a string, not the number of characters it displays as.

For a plain ASCII string, bytes and characters are the same thing, so ``strlen()`` gives the expected result. For a string encoded in UTF-8 or another multibyte encoding, a single displayed character can occupy several bytes, so ``strlen()`` returns a larger number than the count of characters a person would see on screen; ``mb_strlen()`` counts characters instead, using the encoding it is given.

``strlen()`` runs in constant time on a well-formed PHP string, because the length is stored alongside the bytes rather than computed by scanning them, which is one of the reasons it stays cheap to call even on very large strings.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strlen.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strlen.html","name":"strlen()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 18:46:41 +0000","dateModified":"Fri, 25 Sep 2026 18:46:41 +0000","description":"strlen() returns the number of bytes in a string, not the number of characters it displays as","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strlen.html"]}],"keywords":["native function","string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/count.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mbstring.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.strlen.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strlen"}]}]}</script>
```php
<?php

    echo strlen('hello');       // 5
    echo strlen('héllo');       // 6, é is 2 bytes in UTF-8
    echo mb_strlen('héllo');    // 5, characters not bytes

?>
```

**[Documentation](https://www.php.net/manual/en/function.strlen.php)**
## Related

+ [String](string.html)
+ [count()](count.html)
+ [Multibyte String](mbstring.html)
