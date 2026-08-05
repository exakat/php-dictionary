# Multi-byte
Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one. 

In ASCII, the roman alphabet is coded over 1 character, making it mono-byte. But other languages, such as Chinese, needs for than one byte to represents all the ideograms. 

Unicode, for example, is multi-byte: 2 bytes. It may be encoded as UTF-8 on 2 bytes, UTF-16 on 4 bytes or UTF-32 on 8 bytes.

String functions are single-byte. When needed, extensions such as ``iconv``, ``intl`` and ``mbstring`` are able to manipulate multi-byte characters without breaking them.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/multi-byte.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/multi-byte.ini.html","name":"Multi-byte","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:20:39 +0000","dateModified":"Thu, 09 Jul 2026 08:20:39 +0000","description":"Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Multi-byte.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Unicode](unicode.ini.html)
+ [UTF-8](utf8.ini.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.ini.html)
+ [Byte](byte.ini.html)
+ [Text](text.ini.html)
