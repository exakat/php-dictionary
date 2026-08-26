# Custom
A feature is called ``custom`` when it is not part of the standard installation of PHP, any PHP extension or a publish library. For example, the function ``foo()`` is generally a custom function.

Any declaration object may be custom: constants, variables, classes, interfaces, enums, traits. 

A custom asset is usually the last to be defined, and, as such, has to use a distinct name. For example, declaring a function called ``wp_header`` is possible as long as the code is not part of Wordpress, which does declare it as a common set of features.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom.html","name":"Custom","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 18:27:31 +0000","dateModified":"Tue, 25 Aug 2026 18:27:31 +0000","description":"A feature is called custom when it is not part of the standard installation of PHP, any PHP extension or a publish library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/built-in.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/userland.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/User-defined_function"},{"@type":"CreativeWork","name":"PHP: User-defined Functions","url":"https:\/\/www.php.net\/manual\/en\/functions.user-defined.php"},{"@type":"CreativeWork","name":"Anonymous functions","url":"https:\/\/www.php.net\/manual\/en\/functions.anonymous.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"custom"}]}]}</script>
```php
<?php

// This is a custom function
function foo() {}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/User-defined_function)**
## See Also

+ [PHP: User-defined Functions](https://www.php.net/manual/en/functions.user-defined.php)
+ [Anonymous functions](https://www.php.net/manual/en/functions.anonymous.php)

## Related

+ [Native](built-in.html)
+ [Userland](userland.html)
