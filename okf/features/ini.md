---
type: "PHP Feature"
title: "INI"
description: "The INI format is a simple, human-readable file format used for configuration settings."
resource: "https://en.wikipedia.org/wiki/INI_file"
tags: ["format"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# INI

The INI format is a simple, human-readable file format used for configuration settings. It consists of key-value pairs grouped into sections.

It is natively supported by PHP, and used internally for the ``php.ini`` file.

It is related to the TOML format.

```php
<?php

    parse_ini_file('/path/to/php.ini');
    
    parse_ini_string(<<<INI
    ; This is a comment
    # Another comment
    
    [database]
    host = localhost
    username = root
    password = secret
    port = 3306
    INI);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/INI_file](https://en.wikipedia.org/wiki/INI_file)

## See Also
- [INI configuration](http://linuxcnc.org/docs/html/config/ini-config.html)

## Related
- [Format](/features/format.md)
- [JavaScript Object Notation (JSON)](/features/json.md)
- [Tom's Obvious Minimal Language (TOML)](/features/toml.md)

## Details
- Packagist: [matomo/ini](https://packagist.org/packages/matomo/ini)

