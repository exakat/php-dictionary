# Locale
Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time.

Locales are extracted from the system, and depends on a country name and a language name. For example, ``fr-FR`` for French French, ``nl_NL`` for Dutch, or ``zh_CN`` for Chinese Chinese. 

Locale are supported with the ext/icu extension, and also, natively with the ``setlocale()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html","name":"Locale","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:52:25 +0000","dateModified":"Thu, 13 Aug 2026 05:52:25 +0000","description":"Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Locale.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"locale"}]}]}</script>
```php
<?php

    /* Set locale to Dutch */
    setlocale(LC_ALL, 'nl_NL');
    
    /* Output: vrijdag 22 december 1978 */
    echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));

?>
```

**[Documentation](https://www.php.net/manual/en/class.locale.php)**
## Related

+ [setlocale](setlocale.html)
+ [gettext Extension](gettext.html)
+ [Internationalization](internationalization.html)
+ [Internationalization Functions](intl.html)
