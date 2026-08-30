---
type: "PHP Feature"
title: "setlocale"
description: "``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting."
resource: "https://www.php.net/manual/en/function.setlocale.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# setlocale

``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting.

``setlocale()`` changes a global state: once called, it affects all subsequent locale-sensitive operations in the same process. This makes it fragile in long-running applications or when multiple locales are needed simultaneously. The locale must be available on the host system, and availability varies across platforms.

For locale-aware string handling, the ``Intl`` extension provides a more robust and portable alternative, with classes such as ``Collator``, ``NumberFormatter``, and ``IntlDateFormatter``.

``setlocale()`` returns the new locale string on success, or ``false`` if the locale cannot be set.

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

## Documentation
- [https://www.php.net/manual/en/function.setlocale.php](https://www.php.net/manual/en/function.setlocale.php)

## See Also
- [Implementing PHP localization: A complete guide](https://lokalise.com/blog/implementing-php-localization-complete-guide/)

## Related
- [Internationalization Functions](/features/intl.md)
- [strtolower()](/features/strtolower.md)
- [strtoupper()](/features/strtoupper.md)
- [Locale](/features/locale.md)

## Details
- Extension: ext-intl

