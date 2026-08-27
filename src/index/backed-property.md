# Backed Property
A backed property is a property with a hook, that actually uses the eponymous property to store the value.

The opposite of a backed property is a virtual property.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-property.html","name":"Backed Property","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:11 +0000","dateModified":"Thu, 20 Aug 2026 07:35:11 +0000","description":"A backed property is a property with a hook, that actually uses the eponymous property to store the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-property.html"]}],"keywords":["property"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/virtual-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.property-hooks.php"},{"@type":"CreativeWork","name":"PHP 8.4 Property Hooks","url":"https:\/\/ashallendesign.co.uk\/blog\/php-84-property-hooks"},{"@type":"CreativeWork","name":"Property Hooks Are Coming To PHP 8.4!","url":"https:\/\/www.phparch.com\/2024\/10\/property-hooks-are-coming-to-php-8-4\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backed-property"}]}]}</script>
```php
<?php

class X {
    public $p { get => $this->p; }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.property-hooks.php)**
## See Also

+ [PHP 8.4 Property Hooks](https://ashallendesign.co.uk/blog/php-84-property-hooks)
+ [Property Hooks Are Coming To PHP 8.4!](https://www.phparch.com/2024/10/property-hooks-are-coming-to-php-8-4/)

## Related

+ [Virtual Property](virtual-property.html)
+ [Backed](backed.html)
