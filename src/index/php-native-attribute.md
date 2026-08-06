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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-native-attribute.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-native-attribute.html","name":"PHP Native Attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP supports a system of attributes, to add local configuration to methods, classes, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Native Attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Attribute](attribute.ini.html)
+ [Allow Dynamic Properties](allowdynamicproperties.ini.html)
+ [Return Type Will Change](returntypewillchange.ini.html)
+ [Sensitive Parameter](sensitiveparameter.ini.html)
+ [Override Attribute](override.ini.html)
+ [Deprecated](deprecated.ini.html)
+ [delayedtargetvalidation](delayedtargetvalidation.ini.html)
+ [NoDiscard](nodiscard.ini.html)
+ [Overriding](overriding.ini.html)
