# Internationalization
Internationalization is the process to make the human interface of a program in a local language. 

PHP includes some internationalization capabilities, via the locale, for dates or money format, or with the ext/intl extension. 

Most of the interface translations for application is done with specific components, such as ``Symfony/translation``. Translation of interface messages is part of this concept.

Internationalization is also called ``i18n``, aka i, 18 letters and n. This is shorter to write. This word may be written with a z or an s, depending on the flavor of English being used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/internationalization.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/internationalization.html","name":"Internationalization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Internationalization is the process to make the human interface of a program in a local language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Internationalization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Locale](locale.ini.html)
+ [Internationalization Functions](intl.ini.html)
+ [gettext Extension](gettext.ini.html)

## Related packages

+ [Symfony/translation](https://packagist.org/packages/Symfony/translation)
