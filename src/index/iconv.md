# Iconv
``iconv`` is a PHP extension that stands for "Internationalized CONVersion". It provides functionality to convert strings between different character encodings, making it useful for dealing with multilingual and internationalized applications.

The ``iconv`` extension allows to convert strings from one character encoding to another, and it also supports transliteration and character set detection. This is particularly important when dealing with data that may come from different sources with various character encodings.

``iconv`` is both a PHP function, a PHP extension and an independent library for character encoding conversion, also known as ``libiconv``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iconv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iconv.html","name":"Iconv","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"iconv is a PHP extension that stands for \"Internationalized CONVersion\"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iconv.html"]}],"keywords":["extension","standard"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mbstring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding-text.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.iconv.php"},{"@type":"CreativeWork","name":"libiconv","url":"http:\/\/www.gnu.org\/software\/libiconv\/"},{"@type":"CreativeWork","name":"How to use Iconv function in PHP","url":"https:\/\/topic.alibabacloud.com\/a\/how-to-use-font-colorrediconvfont-function-in-php_4_86_30934271.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"iconv"}]}]}</script>
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

+ [Multibyte String](mbstring.html)
+ [Text Encoding](encoding-text.html)
+ [Encoding](encoding.html)

## Related packages

+ [zbateson/mb-wrapper](https://packagist.org/packages/zbateson/mb-wrapper)
