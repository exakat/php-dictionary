# getenv()
``getenv()`` is a PHP native function that reads the value of an environment variable. Called with a name, it returns that variable's value, or ``false`` if it is not set. Called with no argument, it returns an associative array of every currently available environment variable.

Unlike the ``$_ENV`` superglobal, whose content is collected once at the start of the script and depends on the ``variables_order`` directive, ``getenv()`` always queries the environment directly, so it reflects changes made during execution, for example with ``putenv()``.

When PHP runs under a SAPI such as FPM or FastCGI, ``getenv()`` returns the value set by the SAPI itself, even if ``putenv()`` was used to override it locally; passing ``true`` as the second, ``local_only``, argument restricts the lookup to locally-set values.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getenv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getenv.html","name":"getenv()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:30:04 +0000","dateModified":"Tue, 18 Aug 2026 05:30:04 +0000","description":"getenv() is a PHP native function that reads the value of an environment variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getenv.html"]}],"keywords":["native function","os"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_env.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/environment-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/environment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_server.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.getenv.php"},{"@type":"CreativeWork","name":"Use of getenv() function in PHP","url":"https:\/\/linuxhint.com\/use-of-getenv-function-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"getenv"}]}]}</script>
```php
<?php

    // read a single environment variable
    $home = getenv('HOME');

    // read every environment variable
    $env = getenv();

    putenv('MY_VARIABLE=42');
    echo getenv('MY_VARIABLE'); // 42

?>
```

**[Documentation](https://www.php.net/manual/en/function.getenv.php)**
## See Also

+ [Use of getenv() function in PHP](https://linuxhint.com/use-of-getenv-function-in-php/)

## Related

+ [$\_ENV]($_env.html)
+ [Environment Variables](environment-variable.html)
+ [Environment](environment.html)
+ [$\_SERVER]($_server.html)
