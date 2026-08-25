# Wildcard
The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything.

Wildcards are used in various places:

+ Glob patterns, to match any number of characters: ``*.php`` matches any PHP file
+ Regex patterns, with ``.*`` or ``.*?``
+ ``mixed`` type is a wildcard type
+ ``~`` in autoloading definition, which defines a minimum version

In autoloading, wildcards allow mapping entire namespaces at once.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wildcard.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wildcard.html","name":"Wildcard","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:45:14 +0000","dateModified":"Mon, 17 Aug 2026 09:45:14 +0000","description":"The wildcard, for example the *, %, _, ~ characters, is a placeholder that matches anything","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wildcard.html"]}],"keywords":["pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glob.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tilde.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.basic-syntax.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"wildcard"}]}]}</script>
```php
<?php

    // glob patterns with wildcard
    foreach (glob('*.php') as $filename) {
        echo "$filename\n";
    }
    
    // Variadic arguments (spread operator)
    function foo(...$args) {
        print_r($args);
    }
    
    foo(1, 2, 3);
    
    // mixed type (PHP 8.0+)
    function bar(mixed $value): mixed {
        return $value;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.php)**
## Related

+ [glob()](glob.html)
+ [Mixed](mixed.html)
+ [Variadic](variadic.html)
+ [Regular Expression](regex.html)
+ [Tilde ~](tilde.html)
+ [Star \*](star.html)

## Related packages

+ [okapi/wildcards](https://packagist.org/packages/okapi/wildcards)
