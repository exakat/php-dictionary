# $\_ENV
The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values. 

The ``$_ENV`` variable is an associative array where the keys are the global variables and the values are the corresponding values. 

``$_ENV`` is a superglobal: it is always available, in every scope.

Values inside ``$_ENV`` are always strings. 

The values in the ``$_ENV`` are collected at the start of the script, and do no change during the life time of the script. To get an up to date value, the function ``getenv()`` is preferable.

The content of the ``$_ENV`` array varies from installation to installation: there is no default list of keys in that array. It entirely depends on the underlying system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_env.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_env.ini.html","name":"$_ENV","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:21:35 +0000","dateModified":"Sun, 02 Aug 2026 06:21:35 +0000","description":"The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$_ENV.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// Displays the name of the user
echo $_ENV['USER'];

    print_r($_ENV);
    // Results is similar to this 
    /**
    Array
    (
        [TERM] => xterm
        [PATH] => /usr/bin:/bin
        [LANG] => C
        [SHELL] => /bin/sh
        [MAIL] => /var/mail/nobody
        [LOGNAME] => nobody
        [USER] => nobody
        [HOME] => /tmp
    )
    */

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.environment.php)**
## See Also

+ [Environment Variables in PHP: A Practical Guide](https://envmanager.com/blog/environment-variables-in-php)

## Related

+ [$\_GET]($_get.ini.html)
+ [$\_COOKIE]($_cookie.ini.html)
+ [$\_POST]($_post.ini.html)
+ [$\_REQUEST]($_request.ini.html)
+ [$\_FILES]($_FILES.ini.html)
+ [$\_SERVER]($_server.ini.html)
+ [$GLOBALS]($globals.ini.html)
+ [Superglobal Variables](superglobal.ini.html)
