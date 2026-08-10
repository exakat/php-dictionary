# $\_ENV
The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values. 

The ``$_ENV`` variable is an associative array where the keys are the global variables and the values are the corresponding values. 

``$_ENV`` is a superglobal: it is always available, in every scope.

Values inside ``$_ENV`` are always strings. 

The values in the ``$_ENV`` are collected at the start of the script, and do no change during the life time of the script. To get an up to date value, the function ``getenv()`` is preferable.

The content of the ``$_ENV`` array varies from installation to installation: there is no default list of keys in that array. It entirely depends on the underlying system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_env.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_env.html","name":"$_ENV","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$_ENV.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"$_ENV"}]}]}</script>
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

+ [$\_GET]($_get.html)
+ [$\_COOKIE]($_cookie.html)
+ [$\_POST]($_post.html)
+ [$\_REQUEST]($_request.html)
+ [$\_FILES]($_FILES.html)
+ [$\_SERVER]($_server.html)
+ [$GLOBALS]($globals.html)
+ [Superglobal Variables](superglobal.html)
