# Multi-byte
Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one. 

In ASCII, the roman alphabet is coded over 1 character, making it mono-byte. But other languages, such as Chinese, needs for than one byte to represents all the ideograms. 

Unicode, for example, is multi-byte: 2 bytes. It may be encoded as UTF-8 on 2 bytes, UTF-16 on 4 bytes or UTF-32 on 8 bytes.

String functions are single-byte. When needed, extensions such as ``iconv``, ``intl`` and ``mbstring`` are able to manipulate multi-byte characters without breaking them.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multi-byte.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multi-byte.html","name":"Multi-byte","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:20:39 +0000","dateModified":"Thu, 09 Jul 2026 08:20:39 +0000","description":"Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multi-byte.html"]}],"alternateName":["mb","multibyte"],"keywords":["encoding","string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/utf8.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/text.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.mbstring.php"},{"@type":"CreativeWork","name":"Character Encoding","url":"https:\/\/medium.com\/@gftea\/character-encoding-ff9a14a10ec7"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"multi-byte"}]}]}</script>
```php
<?php

    print strlen('me'); // 2 chars
    
    print strlen('我'); // 3 chars
    
    print mb_strlen('我'); // 1 chars

?>
```

**[Documentation](https://www.php.net/manual/en/book.mbstring.php)**
## See Also

+ [Character Encoding](https://medium.com/@gftea/character-encoding-ff9a14a10ec7)

## Related

+ [Unicode](unicode.html)
+ [UTF-8](utf8.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.html)
+ [Byte](byte.html)
+ [Text](text.html)
