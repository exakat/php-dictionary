# register\_argc\_argv
This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables. By default, the directive is active and the variables are available.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html","name":"register_argc_argv","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:38 +0000","dateModified":"Tue, 18 Aug 2026 05:24:38 +0000","description":"This directive controls the availability of the $argv and $argc PHP native variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html"]}],"keywords":["directive"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argv.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24argc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ini.core.php#ini.register-argc-argv"},{"@type":"CreativeWork","name":"Register_argc_argv: A Detailed Look at Its Significance and Use in PHP","url":"https:\/\/www.mydreams.cz\/en\/hosting-wiki\/10316-register-argc-argv-a-detailed-look-at-its-significance-and-use-in-php.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"register_argc_argv"}]}]}</script>
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
## See Also

+ [Register_argc_argv: A Detailed Look at Its Significance and Use in PHP](https://www.mydreams.cz/en/hosting-wiki/10316-register-argc-argv-a-detailed-look-at-its-significance-and-use-in-php.html)

## Related

+ [$argv]($argv.html)
+ [$argc]($argc.html)
+ [Directives](directive.html)
