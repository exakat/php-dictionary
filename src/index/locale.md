# Locale
Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time.

Locales are extracted from the system, and depends on a country name and a language name. For example, ``fr-FR`` for French French, ``nl_NL`` for Dutch, or ``zh_CN`` for Chinese Chinese. 

Locale are supported with the ext/icu extension, and also, natively with the ``setlocale()`` function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html","name":"Locale","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 09:53:20 +0000","dateModified":"Sat, 15 Aug 2026 09:53:20 +0000","description":"Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html"]}],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setlocale.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettext.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/internationalization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intl.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.locale.php"},{"@type":"CreativeWork","name":"Internationalization and localization","url":"https:\/\/en.wikipedia.org\/wiki\/Internationalization_and_localization"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"locale"}]}]}</script>
```php
<?php

    /* Set locale to Dutch */
    setlocale(LC_ALL, 'nl_NL');
    
    /* Output: vrijdag 22 december 1978 */
    echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));

?>
```

**[Documentation](https://www.php.net/manual/en/class.locale.php)**
## See Also

+ [Internationalization and localization](https://en.wikipedia.org/wiki/Internationalization_and_localization)

## Related

+ [setlocale](setlocale.html)
+ [gettext Extension](gettext.html)
+ [Internationalization](internationalization.html)
+ [Internationalization Functions](intl.html)
