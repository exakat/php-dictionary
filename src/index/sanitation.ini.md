# Sanitation
Sanitation is the process to clean data and remove any unwanted parts. The data may end up modified by this process, sometimes quite a lot. There are native and extension functions to perform sanitation, as long as components.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sanitation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sanitation.ini.html","name":"Sanitation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:16:40 +0000","dateModified":"Wed, 05 Aug 2026 08:16:40 +0000","description":"Sanitation is the process to clean data and remove any unwanted parts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Sanitation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;

?>
```

**[Documentation](https://www.php.net/manual/en/filter.examples.validation.php)**
## See Also

+ [Data sanitization](https://en.wikipedia.org/wiki/Data_sanitization)

## Related

+ [Validation](validation.ini.html)
+ [filter](filter.ini.html)
+ [Parse](parse.ini.html)
+ [Parser](parser.ini.html)
+ [HTMLPurifier](htmlpurifier.ini.html)

## Related packages

+ [waavi/sanitizer](https://packagist.org/packages/waavi/sanitizer)
