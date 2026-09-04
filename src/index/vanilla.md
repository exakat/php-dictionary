# Vanilla PHP
Vanilla PHP refers to writing an application using only the PHP language and its native, built-in features, without relying on any framework or third-party library. The term is borrowed from ``vanilla JS``, itself named after plain vanilla ice cream: no extra flavor, no components.

Vanilla PHP is not a technical feature of the language: it is a description of a codebase's dependencies, or the lack thereof. It contrasts with using a framework, such as ``Laravel`` or ``Symfony``, which provides routing, dependency injection, an ORM, etc., or a library, which provides a narrower, reusable piece of functionality.

Writing vanilla PHP avoids the learning curve, footprint, and version-compatibility constraints of external code, at the cost of implementing anew common needs, such as routing or templating, by hand. It is a common choice for small scripts, learning exercises, and legacy codebases predating widespread framework adoption.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vanilla.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vanilla.html","name":"Vanilla PHP","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 14:35:44 +0000","dateModified":"Thu, 03 Sep 2026 14:35:44 +0000","description":"Vanilla PHP refers to writing an application using only the PHP language and its native, built-in features, without relying on any framework or third-party library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vanilla.html"]}],"alternateName":["vanilla-php","plain-php"],"keywords":["concept","architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/framework.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/library.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/userland.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/funcref.php"},{"@type":"CreativeWork","name":"Vanilla software - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Vanilla_software"},{"@type":"CreativeWork","name":"What is the difference between core PHP and vanilla\/plain PHP?","url":"https:\/\/docs.php.earth\/faq\/intro\/core-vs-vanilla\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"vanilla"}]}]}</script>
```php
<?php

    // Vanilla PHP: routing done by hand, with only native functions
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch ($path) {
        case '/':
            echo 'Home page';
            break;
        case '/about':
            echo 'About page';
            break;
        default:
            http_response_code(404);
            echo 'Not found';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/funcref.php)**
## See Also

+ [Vanilla software - Wikipedia](https://en.wikipedia.org/wiki/Vanilla_software)
+ [What is the difference between core PHP and vanilla/plain PHP?](https://docs.php.earth/faq/intro/core-vs-vanilla/)

## Related

+ [Framework](framework.html)
+ [Library](library.html)
+ [Dependency](dependency.html)
+ [Native](native.html)
+ [Userland](userland.html)
