# Multibyte String
``mbstring`` provides function to process multibyte strings functions. Moreover, ``mbstring`` converts from and to various character encodings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mbstring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mbstring.html","name":"Multibyte String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``mbstring`` provides function to process multibyte strings functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Multibyte String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    /* Convert EUC-JP to UTF-7 */
    $str = mb_convert_encoding($str, "UTF-7", "EUC-JP");

?>
```

**[Documentation](https://www.php.net/manual/en/book.mbstring.php)**
## Related

+ [Iconv](iconv.ini.html)
+ [Encoding](encoding.ini.html)
+ [Text Encoding](encoding-text.ini.html)
+ [strtolower()](strtolower.ini.html)
+ [strtoupper()](strtoupper.ini.html)
