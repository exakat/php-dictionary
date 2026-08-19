# Sanitation
Sanitation is the process to clean data and remove any unwanted parts. The data may end up modified by this process, sometimes quite a lot. There are native and extension functions to perform sanitation, as long as components.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sanitation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sanitation.html","name":"Sanitation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Sanitation is the process to clean data and remove any unwanted parts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Sanitation.html"]}],"alternateName":["sanitization"],"keywords":["chore"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parser.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlpurifier.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/filter.examples.validation.php"},{"@type":"CreativeWork","name":"Data sanitization","url":"https:\/\/en.wikipedia.org\/wiki\/Data_sanitization"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sanitation"}]}]}</script>
```php
<?php

    echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;

?>
```

**[Documentation](https://www.php.net/manual/en/filter.examples.validation.php)**
## See Also

+ [Data sanitization](https://en.wikipedia.org/wiki/Data_sanitization)

## Related

+ [Validation](validation.html)
+ [filter](filter.html)
+ [Parse](parse.html)
+ [Parser](parser.html)
+ [HTMLPurifier](htmlpurifier.html)

## Related packages

+ [waavi/sanitizer](https://packagist.org/packages/waavi/sanitizer)
