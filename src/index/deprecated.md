# Deprecated
Deprecated is a native PHP attribute. It marks a method, function or class constant as available, but soon to be removed. 

The Deprecated attribute accepts an argument, that is shown to help users move to an alternative.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html","name":"Deprecated","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:21 +0000","dateModified":"Mon, 17 Aug 2026 09:06:21 +0000","description":"Deprecated is a native PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html"]}],"keywords":["attribute","php attribute","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arcane.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/legacy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/forward-compatible.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/deprecated_attribute"},{"@type":"CreativeWork","name":"#[Deprecated] attribute - PHP 8.4","url":"https:\/\/php.watch\/versions\/8.4\/Deprecated"},{"@type":"CreativeWork","name":"PHP Deprecated Attribute: Mark Methods in 8.4","url":"https:\/\/richdynamix.com\/articles\/php-84-deprecated-attribute-mark-methods-laravel"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deprecated"}]}]}</script>
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
## See Also

+ [#[Deprecated] attribute - PHP 8.4](https://php.watch/versions/8.4/Deprecated)
+ [PHP Deprecated Attribute: Mark Methods in 8.4](https://richdynamix.com/articles/php-84-deprecated-attribute-mark-methods-laravel)

## Related

+ [Deprecation](deprecation.html)
+ [Arcane](arcane.html)
+ [Legacy](legacy.html)
+ [PHP Native Attributes](php-attribute.html)
+ [PHP Native Attribute](php-native-attribute.html)
+ [Forward Compatible](forward-compatible.html)
