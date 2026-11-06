# Is
``is`` is a reserved name. It has no other use: it is not a keyword, an operator or a function, so it cannot be used for anything in the language.

Since PHP 8.6, ``is`` is deprecated as an identifier. Using it as the name of a class, interface, trait, enum, function or constant, including through ``define()``, as the alias passed to ``class_alias()``, or as the alias in a ``use``, ``use function`` or ``use const`` declaration, emits a deprecation.

Avoid ``is`` for names in your code. It is kept free for future language features. The PHP functions that start with ``is_``, such as ``is_array()``, are not affected: their name is ``is_array``, not ``is``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is.html","name":"Is","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Nov 2026 20:50:49 +0000","dateModified":"Fri, 06 Nov 2026 20:50:49 +0000","description":"is is a reserved name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is.html"]}],"keywords":["reserved"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/let.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_a.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-alias.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/deprecations_php_8_6#deprecate_using_is_as_an_identifier"},{"@type":"CreativeWork","name":"PHP 8.6 deprecations RFC","url":"https:\/\/wiki.php.net\/rfc\/deprecations_php_8_6"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.40","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is"}]}]}</script>
```php
<?php

// Deprecated since PHP 8.6
class is {
}

function is() {
}

define('is', 1);

?>
```

**[Documentation](https://wiki.php.net/rfc/deprecations_php_8_6#deprecate_using_is_as_an_identifier)**
## See Also

+ [PHP 8.6 deprecations RFC](https://wiki.php.net/rfc/deprecations_php_8_6)

## Related

+ [Let](let.html)
+ [Underscore](underscore.html)
+ [is\_a()](is_a.html)
+ [define()](define.html)
+ [Class Aliases](class-alias.html)
