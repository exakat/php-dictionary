# Multibyte String
``mbstring`` provides function to process multibyte strings functions. Moreover, ``mbstring`` converts from and to various character encodings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mbstring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mbstring.html","name":"Multibyte String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"mbstring provides function to process multibyte strings functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Multibyte String.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mbstring"}]}]}</script>
```php
<?php

    /* Convert EUC-JP to UTF-7 */
    $str = mb_convert_encoding($str, "UTF-7", "EUC-JP");

?>
```

**[Documentation](https://www.php.net/manual/en/book.mbstring.php)**
## See Also

+ [Understanding mb_substr() in PHP: A Guide to Multibyte String Substrings](https://medium.com/@dabersamir/understanding-mb-substr-in-php-a-guide-to-multibyte-string-substrings-abd1613666c1)

## Related

+ [Iconv](iconv.html)
+ [Encoding](encoding.html)
+ [Text Encoding](encoding-text.html)
+ [strtolower()](strtolower.html)
+ [strtoupper()](strtoupper.html)
