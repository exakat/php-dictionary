# Internationalization
Internationalization is the process of making the human interface of a program available in a local language.

PHP includes some internationalization capabilities, via the locale, for dates or money format, or with the ext/intl extension. 

Most of the interface translations for an application are done with specific components, such as ``Symfony/translation``. Translation of interface messages is part of this concept.

Internationalization is also called ``i18n``, aka i, 18 letters and n. This is shorter to write. This word may be written with a z or an s, depending on the flavor of English being used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/internationalization.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/internationalization.html","name":"Internationalization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:02:47 +0000","dateModified":"Tue, 11 Aug 2026 21:02:47 +0000","description":"Internationalization is the process of making the human interface of a program available in a local language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Internationalization.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"internationalization"}]}]}</script>
```php
<?php
/* Configure le script en hollandais */
setlocale(LC_ALL, 'nl_NL');

/* Affiche : vrijdag 22 december 1978 */
echo strftime('%A %e %B %Y', mktime(0, 0, 0, 12, 22, 1978));

?>
```

**[Documentation](https://www.php.net/manual/en/book.intl.php)**
## See Also

+ [PHP internationalization - i18n mechanisms tutorial](https://lingohub.com/blog/2013/06/php-internationalization-i18n-mechanisms-tutorial)
+ [Implementing PHP localization: A complete guide](https://lokalise.com/blog/implementing-php-localization-complete-guide/)

## Related

+ [Locale](locale.html)
+ [Internationalization Functions](intl.html)
+ [gettext Extension](gettext.html)

## Related packages

+ [Symfony/translation](https://packagist.org/packages/Symfony/translation)
