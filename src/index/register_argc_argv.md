# register\_argc\_argv
This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables. By default, the directive is active and the variables are available.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html","name":"register_argc_argv","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"register_argc_argv"}]}]}</script>
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

+ [$argv]($argv.html)
+ [$argc]($argc.html)
+ [Directives](directive.html)
