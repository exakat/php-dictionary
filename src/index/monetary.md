# Monetary Formatting
Monetary formatting is the locale-aware presentation of a numeric value as a currency amount, correctly choosing the currency symbol, its position before or after the number, the decimal and thousands separators, and the number of decimal places for the target locale and currency; the same value of 1234.56 should display as $1,234.56 in the United States and as 1 234,56 € in France. PHP originally handled this through ``setlocale(LC_MONETARY, ...)`` together with ``localeconv()``, which exposes the current locale's monetary conventions as an array, and the dedicated ``money_format()`` function, but ``money_format()`` was deprecated in version 7.4 and removed entirely in version 8.0. The modern replacement is the NumberFormatter class from the ``intl`` extension, constructed with a locale and the ``NumberFormatter::CURRENCY`` style, whose ``formatCurrency()`` method produces a correctly formatted string for any given locale and ISO 4217 currency code, and whose companion ``parseCurrency()`` method can parse a formatted string back into a numeric value and currency code. Because formatting money incorrectly is an easy and visible mistake in international applications, using ``NumberFormatter`` rather than manual string concatenation is the recommended approach in current PHP code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monetary.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monetary.html","name":"Monetary Formatting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 09:01:15 +0000","dateModified":"Thu, 03 Sep 2026 09:01:15 +0000","description":"Monetary formatting is the locale-aware presentation of a numeric value as a currency amount, correctly choosing the currency symbol, its position before or after the number, the decimal and thousands separators, and the number of decimal places for the target locale and currency","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monetary.html"]}],"alternateName":["money_format"],"keywords":["extension","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setlocale.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/numberformatter.formatcurrency.php"},{"@type":"CreativeWork","name":"NumberFormatter::formatCurrency","url":"https:\/\/www.php.net\/manual\/en\/numberformatter.formatcurrency.php"},{"@type":"CreativeWork","name":"How to format currencies in PHP","url":"https:\/\/www.koladechris.com\/blog\/how-to-format-currencies-in-php"},{"@type":"CreativeWork","name":"Death by a Thousand Rounds: PHP meets Money","url":"https:\/\/phpconference.nl\/session\/death-by-a-thousand-rounds-php-meets-money\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"monetary"}]}]}</script>
```php
<?php

    $fmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);
    echo $fmt->formatCurrency(1234.56, 'EUR');
    // 1 234,56 €
    
    $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
    echo $fmt->formatCurrency(1234.56, 'USD');
    // $1,234.56

?>
```

**[Documentation](https://www.php.net/manual/en/numberformatter.formatcurrency.php)**
## See Also

+ [NumberFormatter::formatCurrency](https://www.php.net/manual/en/numberformatter.formatcurrency.php)
+ [How to format currencies in PHP](https://www.koladechris.com/blog/how-to-format-currencies-in-php)
+ [Death by a Thousand Rounds: PHP meets Money](https://phpconference.nl/session/death-by-a-thousand-rounds-php-meets-money/)

## Related

+ [Internationalization Functions](intl.html)
+ [Locale](locale.html)
+ [setlocale](setlocale.html)
