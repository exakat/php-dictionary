---
type: "PHP Feature"
title: "parse_ini_file()"
description: "``parse_ini_file()`` is a PHP native function that reads an INI configuration file and returns its content as an associative array."
resource: "https://www.php.net/manual/en/function.parse-ini-file.php"
tags: ["native function", "configuration"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# parse_ini_file()

``parse_ini_file()`` is a PHP native function that reads an INI configuration file and returns its content as an associative array.

By default, sections, i.e. lines like ``[section]``, are dropped and only the settings inside them are returned. Passing ``true`` as the second argument, ``process_sections``, keeps each section as its own nested array in the result.

A third argument, ``scanner_mode``, controls how values are read: ``INI_SCANNER_NORMAL``, the default, returns every value as a string; ``INI_SCANNER_RAW`` disables all value interpretation, including PHP constants; ``INI_SCANNER_TYPED`` converts recognizable values, such as ``true``, ``false``, ``null``, and numeric strings, to their native PHP type.

``parse_ini_file()`` reads and interprets PHP constants found in unquoted values, which makes it unsafe to run against a file supplied or editable by an untrusted party. ``parse_ini_string()`` performs the same parsing on a string already held in memory, rather than a file on disk.

```php
<?php

    // config.ini:
    // [database]
    // host = localhost
    // port = 5432
    // enabled = true

    $config = parse_ini_file('config.ini', true, INI_SCANNER_TYPED);

    // $config = [
    //     'database' => [
    //         'host' => 'localhost',
    //         'port' => 5432,     // int, thanks to INI_SCANNER_TYPED
    //         'enabled' => true,  // bool, thanks to INI_SCANNER_TYPED
    //     ],
    // ];

?>
```

## Documentation
- [https://www.php.net/manual/en/function.parse-ini-file.php](https://www.php.net/manual/en/function.parse-ini-file.php)

## See Also
- [PHP: parse_ini_string()](https://www.php.net/manual/en/function.parse-ini-string.php)
- [INI file - Wikipedia](https://en.wikipedia.org/wiki/INI_file)

## Related
- [php.ini](/features/php.ini.md)
- [Directives](/features/directive.md)
- [Array, []](/features/array.md)
- [json_decode()](/features/json_decode.md)

