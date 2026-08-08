# Numeronym
A numeronym is an abbreviation where a number replaces the omitted middle letters of a word, typically the count of letters skipped. The pattern is: first letter + count + last letter.

Common examples in the PHP and broader software ecosystem:
- ``i18n``: internationalization, with 18 letters between i and n
- ``l10n``: localization
- ``a11y``: accessibility
- ``k8s``: ``Kubernetes``, with 8 letters between K and s
- ``c10k``: a special case: the letter c plus 10,000 connections, not strictly first/last but widely understood
- ``p13n``: personalization
- ``o11y``: observability

PHP uses ``i18n`` and ``l10n`` pervasively in documentation, library names like ``symfony/translation``, ``gettext``, and configuration keys. Recognising numeronyms reduces friction when reading technical documentation, RFC titles, and dependency names.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeronym.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeronym.html","name":"Numeronym","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:55:32 +0000","dateModified":"Wed, 15 Jul 2026 13:55:32 +0000","description":"A numeronym is an abbreviation where a number replaces the omitted middle letters of a word, typically the count of letters skipped","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Numeronym.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Numeronym"}]}]}</script>
```php
<?php

    // i18n: internationalization
    // The intl extension and gettext are PHP's native i18n tools
    $fmt = new MessageFormatter('fr_FR', 'Bonjour {name}');
    echo $fmt->format(['name' => 'Damien']); // Bonjour Damien
    
    // l10n: localization — formatting numbers, dates, currencies per locale
    $numFmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);
    echo $numFmt->formatCurrency(1234.56, 'EUR'); // 1 234,56 €
    
    // a11y: accessibility — not a PHP runtime concept,
    // but relevant when generating HTML output from PHP templates
    
    // c10k: see c10k.ini — the concurrency problem, not a strict numeronym
    // but universally treated as one in server engineering discourse

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Numeronym)**
## See Also

+ [PHP Internationalization](https://www.php.net/manual/en/book.intl.php)

## Related

+ [Internationalization](internationalization.html)
+ [C10K](c10k.html)
+ [Encoding](encoding.html)
+ [Internationalization Functions](intl.html)
