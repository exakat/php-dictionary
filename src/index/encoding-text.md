# Text Encoding
Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated. 

Encoding applies to PHP scripts, which should be UTF-8 encoded, although it might support other formats.

Encoding applies to incoming and outgoing data.

Encoding operations are provided with ``ext/mbstring``, ``ext/iconv`` and ``ext/intl`` extensions. 

Encoding is also used for code: the source is encoded when it is transformed in an unreadable yet still executable form.

Encoding is also called a character set.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding-text.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding-text.html","name":"Text Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 06:01:35 +0000","dateModified":"Thu, 06 Aug 2026 06:01:35 +0000","description":"Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Text Encoding.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"encoding-text"}]}]}</script>
```php
<?php
$text = 'This is the Euro symbol €.';

echo 'Original : ', $text, PHP_EOL;
echo 'TRANSLIT : ', iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $text), PHP_EOL;
echo 'IGNORE   : ', iconv('UTF-8', 'ISO-8859-1//IGNORE', $text), PHP_EOL;
echo 'Plain    : ', iconv('UTF-8', 'ISO-8859-1', $text), PHP_EOL;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties)**
## See Also

+ [Useful Encoding and decoding Functions You Need to Know](https://medium.com/canopas/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f)
+ [Character Encoding for PHP Developers: Unicode, UTF-8 and ASCII](https://www.honeybadger.io/blog/php-character-encoding-unicode-utf8-ascii/)

## Related

+ [Multibyte String](mbstring.html)
+ [Iconv](iconv.html)
+ [Internationalization Functions](intl.html)
+ [Character](character.html)
+ [HTML Entity](html-entity.html)
