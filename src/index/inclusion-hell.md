# Inclusion Hell
Inclusion hell is the tangled state a codebase reaches when ``include``, ``require``, and their ``_once`` variants are scattered across many files as the only way to make a class or function available, instead of being loaded through a single, predictable mechanism. Because each file may itself include others, the actual set of files loaded for a given request becomes a deep, hard-to-trace chain: knowing whether a given class is already defined at a given point in the code requires mentally following every inclusion that happened before it, rather than looking it up in one place.

The usual symptoms are a ``Fatal error: Cannot redeclare`` when the same file is pulled in twice through a plain ``include`` instead of ``include_once``, includes written with relative paths that break the moment the including file is moved or included from a different working directory, circular inclusion where file A includes file B which includes file A again, and a change to one file's include list unpredictably breaking a feature defined in an unrelated folder.

Inclusion hell was common in codebases before class autoloading and Composer's PSR-4 autoloader became standard practice. Autoloading replaces the whole chain of manual includes with a single hook, invoked only when a class is actually used, and a naming convention that maps a class name directly to its file, removing the need to reason about inclusion order at all.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inclusion-hell.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inclusion-hell.html","name":"Inclusion Hell","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 09:11:40 +0000","dateModified":"Thu, 10 Sep 2026 09:11:40 +0000","description":"Inclusion hell is the tangled state a codebase reaches when include, require, and their _once variants are scattered across many files as the only way to make a class or function available, instead of being loaded through a single, predictable mechanism","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inclusion-hell.html"]}],"alternateName":["include hell"],"keywords":["folklore","sdlc","classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.autoload.php"},{"@type":"CreativeWork","name":"Still Using include() for Everything? PHP Autoloading Can Do It Better.","url":"https:\/\/medium.com\/@asiandigitalhub\/still-using-include-for-everything-php-autoloading-can-do-it-better-d7feb598ac61"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.34","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"inclusion-hell"}]}]}</script>
```php
<?php

    // header.php
    require 'db.php';
    require 'auth.php';

    // auth.php
    require 'db.php';  // already loaded by header.php: without _once, this
                        // redeclares every function and class in db.php

    // Fatal error: Cannot redeclare connectToDatabase()

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.autoload.php)**
## See Also

+ [Still Using include() for Everything? PHP Autoloading Can Do It Better.](https://medium.com/@asiandigitalhub/still-using-include-for-everything-php-autoloading-can-do-it-better-d7feb598ac61)

## Related

+ [include](include.html)
+ [Class Autoloading](autoload.html)
+ [Order Of Execution](order-of-execution.html)
+ [Circular Reference](circular-reference.html)
