# Locale
Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time.

Locales are extracted from the system, and depends on a country name and a language name. For example, ``fr-FR`` for French French, ``nl_NL`` for Dutch, or ``zh_CN`` for Chinese Chinese. 

Locale are supported with the ext/icu extension, and also, natively with the ``setlocale()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/locale.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/locale.html","name":"Locale","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:06:57 +0000","dateModified":"Tue, 07 Jul 2026 05:06:57 +0000","description":"Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Locale.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [setlocale](setlocale.ini.html)
+ [gettext Extension](gettext.ini.html)
+ [Internationalization](internationalization.ini.html)
+ [Internationalization Functions](intl.ini.html)
