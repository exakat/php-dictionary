# Internationalization Functions
The internationalization extension performs operations with locales. For example, it formats dates according to country and language configurations. The operations include, and are not limited to, formatting, transliteration, encoding conversion, calendar operations, » UCA-conformant collation, locating text boundaries and working with locale identifiers, timezones and graphemes.

This extension is closely linked to the ICU library.
```php
<?php
$us = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
echo $us->format(1234567).PHP_EOL;
//1,234,567

$zh = new NumberFormatter('zh_ZH', NumberFormatter::DECIMAL);
echo $zh->format(1234567).PHP_EOL;
//1,234,567

$fr = new NumberFormatter('fr_FR', NumberFormatter::DECIMAL);
echo $fr->format(1234567).PHP_EOL;
//1 234 567

?>
```

## See Also

+ [ICU lib](https://icu.unicode.org/docs/)

Related : [Locale](Locale), [Accessibility](Accessibility), [Accessibility](Accessibility), [Text Encoding](Text Encoding), [Internationalization](Internationalization), [setlocale](setlocale)
