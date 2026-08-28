# setlocale
``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting.

``setlocale()`` changes a global state: once called, it affects all subsequent locale-sensitive operations in the same process. This makes it fragile in long-running applications or when multiple locales are needed simultaneously. The locale must be available on the host system, and availability varies across platforms.

For locale-aware string handling, the ``Intl`` extension provides a more robust and portable alternative, with classes such as ``Collator``, ``NumberFormatter``, and ``IntlDateFormatter``.

``setlocale()`` returns the new locale string on success, or ``false`` if the locale cannot be set.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setlocale.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setlocale.html","name":"setlocale","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"setlocale() is a built-in PHP function that sets locale information, affecting string functions such as strtolower(), strtoupper(), strcmp(), strftime() and number formatting","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setlocale.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtoupper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.setlocale.php"},{"@type":"CreativeWork","name":"Implementing PHP localization: A complete guide","url":"https:\/\/lokalise.com\/blog\/implementing-php-localization-complete-guide\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"setlocale"}]}]}</script>
```php
<?php

    // Set locale to French
    setlocale(LC_ALL, 'fr_FR.UTF-8');

    // Affects string and number functions globally
    echo strtolower('É'); // may behave differently depending on locale

    // Locale may not be available on all systems
    if (setlocale(LC_ALL, 'fr_FR.UTF-8') === false) {
        // locale not available on this host
    }

    // Prefer Intl for portable locale-aware operations
    $formatter = new NumberFormatter('fr_FR', NumberFormatter::DECIMAL);
    echo $formatter->format(1234567.89); // 1 234 567,89

?>
```

**[Documentation](https://www.php.net/manual/en/function.setlocale.php)**
## See Also

+ [Implementing PHP localization: A complete guide](https://lokalise.com/blog/implementing-php-localization-complete-guide/)

## Related

+ [Internationalization Functions](intl.html)
+ [strtolower()](strtolower.html)
+ [strtoupper()](strtoupper.html)
+ [Locale](locale.html)
