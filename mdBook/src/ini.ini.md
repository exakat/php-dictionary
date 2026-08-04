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

## See Also

+ [INI configuration](http://linuxcnc.org/docs/html/config/ini-config.html)

Related : [Format](Format), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Tom's Obvious Minimal Language (TOML)](Tom's Obvious Minimal Language (TOML))
