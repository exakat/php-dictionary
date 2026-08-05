# Internationalization Functions
The internationalization extension performs operations with locales. For example, it formats dates according to country and language configurations. The operations include, and are not limited to, formatting, transliteration, encoding conversion, calendar operations, » UCA-conformant collation, locating text boundaries and working with locale identifiers, timezones and graphemes.

This extension is closely linked to the ICU library.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/intl.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/intl.ini.html","name":"Internationalization Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The internationalization extension performs operations with locales","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Internationalization Functions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
$us = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
echo $us->format(1234567).PHP_EOL;
//1,234,567

$zh = new NumberFormatter('zh_ZH', NumberFormatter::DECIMAL);
echo $zh->format(1234567).PHP_EOL;
//1,234,567

$fr = new NumberFormatter('fr_FR', NumberFormatter::DECIMAL);
echo $fr->format(1234567).PHP_EOL;
//1 234 567

?>
```

**[Documentation](https://www.php.net/manual/en/book.intl.php)**
## See Also

+ [ICU lib](https://icu.unicode.org/docs/)

## Related

+ [Locale](locale.ini.html)
+ [Accessibility](a11y.ini.html)
+ [Accessibility](accessibility.ini.html)
+ [Text Encoding](encoding-text.ini.html)
+ [Internationalization](internationalization.ini.html)
+ [setlocale](setlocale.ini.html)
