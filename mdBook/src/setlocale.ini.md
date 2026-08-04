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

## See Also

+ [Implementing PHP localization: A complete guide](https://lokalise.com/blog/implementing-php-localization-complete-guide/)

Related : [Internationalization Functions](Internationalization Functions), [strtolower()](strtolower()), [strtoupper()](strtoupper()), [Locale](Locale)
