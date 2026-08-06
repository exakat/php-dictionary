# Deprecated
Deprecated is a native PHP attribute. It marks a method, function or class constant as available, but soon to be removed. 

The Deprecated attribute accepts an argument, that is shown to help users move to an alternative.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deprecated.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deprecated.html","name":"Deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Deprecated is a native PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Deprecation](deprecation.ini.html)
+ [Arcane](arcane.ini.html)
+ [Legacy](legacy.ini.html)
+ [PHP Native Attributes](php-attribute.ini.html)
+ [PHP Native Attribute](php-native-attribute.ini.html)
+ [Forward Compatible](forward-compatible.ini.html)
