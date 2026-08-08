# Deprecated
Deprecated is a native PHP attribute. It marks a method, function or class constant as available, but soon to be removed. 

The Deprecated attribute accepts an argument, that is shown to help users move to an alternative.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html","name":"Deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Deprecated is a native PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Deprecated"}]}]}</script>
```php
<?php

#[Deprecated]
function foo() {}

foo();
//Deprecated: Function foo() is deprecated

#[Deprecated('Use hoo instead.')]
function goo() {}

goo();
//Deprecated: Function goo() is deprecated, Use hoo instead.

?>
```

**[Documentation](https://wiki.php.net/rfc/deprecated_attribute)**
## Related

+ [Deprecation](deprecation.html)
+ [Arcane](arcane.html)
+ [Legacy](legacy.html)
+ [PHP Native Attributes](php-attribute.html)
+ [PHP Native Attribute](php-native-attribute.html)
+ [Forward Compatible](forward-compatible.html)
