# register\_argc\_argv
This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables. By default, the directive is active and the variables are available.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/register_argc_argv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/register_argc_argv.html","name":"register_argc_argv","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/register_argc_argv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if (ini_get('register_argc_argv')) {
        var_dump($argv);
    } else {
        print '$argv and $argc are disabled.';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv)**
## Related

+ [$argv]($argv.ini.html)
+ [$argc]($argc.ini.html)
+ [Directives](directive.ini.html)
