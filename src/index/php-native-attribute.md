# PHP Native Attribute
PHP supports a system of attributes, to add local configuration to methods, classes, etc. There are currently, as of PHP 8.5, 7 attributes: 

+ ``Attribute``
+ ``AllowDynamicProperties``
+ ``ReturnTypeWillChange``
+ ``SensitiveParameter``
+ ``Override``
+ ``Deprecated``
+ ``NoDiscard``
+ ``DelayedTargetValidation``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html","name":"PHP Native Attribute","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP supports a system of attributes, to add local configuration to methods, classes, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html"]}],"keywords":["attribute"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/allowdynamicproperties.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/returntypewillchange.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sensitiveparameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/override.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecated.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delayedtargetvalidation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overriding.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.attributes.php"},{"@type":"CreativeWork","name":"PHP Native Attributes","url":"https:\/\/www.exakat.io\/en\/php-native-attributes-quick-reference\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-native-attribute"}]}]}</script>
```php
<?php

class X extends Y {
    #[Override]
    function foo() {
        
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.attributes.php)**
## See Also

+ [PHP Native Attributes](https://www.exakat.io/en/php-native-attributes-quick-reference/)

## Related

+ [Attribute](attribute.html)
+ [Allow Dynamic Properties](allowdynamicproperties.html)
+ [Return Type Will Change](returntypewillchange.html)
+ [Sensitive Parameter](sensitiveparameter.html)
+ [Override Attribute](override.html)
+ [Deprecated](deprecated.html)
+ [delayedtargetvalidation](delayedtargetvalidation.html)
+ [NoDiscard](nodiscard.html)
+ [Overriding](overriding.html)
