---
type: "PHP Feature"
title: "Internationalization"
description: "Internationalization is the process of making the human interface of a program available in a local language."
resource: "https://www.php.net/manual/en/book.intl.php"
tags: ["shortname"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Internationalization

Internationalization is the process of making the human interface of a program available in a local language.

PHP includes some internationalization capabilities, via the locale, for dates or money format, or with the ext/intl extension. 

Most of the interface translations for an application are done with specific components, such as ``Symfony/translation``. Translation of interface messages is part of this concept.

Internationalization is also called ``i18n``, aka i, 18 letters and n. This is shorter to write. This word may be written with a z or an s, depending on the flavor of English being used.

```php
<?php
/* Configure le script en hollandais */
setlocale(LC_ALL, 'nl_NL');

/* Affiche : vrijdag 22 december 1978 */
echo strftime('%A %e %B %Y', mktime(0, 0, 0, 12, 22, 1978));

?>
```

## Documentation
- [https://www.php.net/manual/en/book.intl.php](https://www.php.net/manual/en/book.intl.php)

## See Also
- [PHP internationalization - i18n mechanisms tutorial](https://lingohub.com/blog/2013/06/php-internationalization-i18n-mechanisms-tutorial)
- [Implementing PHP localization: A complete guide](https://lokalise.com/blog/implementing-php-localization-complete-guide/)

## Related
- [Locale](/features/locale.md)
- [Internationalization Functions](/features/intl.md)
- [gettext Extension](/features/gettext.md)

## Details
- Packagist: [Symfony/translation](https://packagist.org/packages/Symfony/translation)

