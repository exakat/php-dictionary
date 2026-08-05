# Iconv
``iconv`` is a PHP extension that stands for "Internationalized CONVersion". It provides functionality to convert strings between different character encodings, making it useful for dealing with multilingual and internationalized applications.

The ``iconv`` extension allows to convert strings from one character encoding to another, and it also supports transliteration and character set detection. This is particularly important when dealing with data that may come from different sources with various character encodings.

``iconv`` is both a PHP function, a PHP extension and an independent library for character encoding conversion, also known as ``libiconv``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iconv.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iconv.ini.html","name":"Iconv","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``iconv`` is a PHP extension that stands for \"Internationalized CONVersion\"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Iconv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

  echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
  // TRANSLIT : This is the Euro symbol 'EUR'.

?>
```

**[Documentation](https://www.php.net/manual/en/book.iconv.php)**
## See Also

+ [libiconv](http://www.gnu.org/software/libiconv/)
+ [How to use Iconv function in PHP](https://topic.alibabacloud.com/a/how-to-use-font-colorrediconvfont-function-in-php_4_86_30934271.html)

## Related

+ [Multibyte String](mbstring.ini.html)
+ [Text Encoding](encoding-text.ini.html)
+ [Encoding](encoding.ini.html)

## Related packages

+ [zbateson/mb-wrapper](https://packagist.org/packages/zbateson/mb-wrapper)
