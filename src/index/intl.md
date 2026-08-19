# Internationalization Functions
The internationalization extension performs operations with locales. For example, it formats dates according to country and language configurations. The operations include, and are not limited to, formatting, transliteration, encoding conversion, calendar operations, » UCA-conformant collation, locating text boundaries and working with locale identifiers, timezones and graphemes.

This extension is closely linked to the ICU library.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intl.html","name":"Internationalization Functions","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The internationalization extension performs operations with locales","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Internationalization Functions.html"]}],"keywords":["extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/a11y.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/accessibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding-text.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/internationalization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setlocale.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.intl.php"},{"@type":"CreativeWork","name":"ICU lib","url":"https:\/\/icu.unicode.org\/docs\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"intl"}]}]}</script>
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

+ [Locale](locale.html)
+ [Accessibility](a11y.html)
+ [Accessibility](accessibility.html)
+ [Text Encoding](encoding-text.html)
+ [Internationalization](internationalization.html)
+ [setlocale](setlocale.html)
