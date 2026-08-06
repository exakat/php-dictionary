# \_\_CLASS\_\_
``__CLASS__`` holds the current class name: this is the class of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The class name includes the namespace it was declared in, such as  ``N\X``. It does not include the leading ``\``. 

When used inside a trait method or property default, ``__CLASS__`` is the name of the class the trait is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__class__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__class__.html","name":"__CLASS__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:15:25 +0000","dateModified":"Wed, 08 Jul 2026 16:15:25 +0000","description":"``__CLASS__`` holds the current class name: this is the class of definition, not the called class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__CLASS__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    namespace N; 
    
    class X {
        function foo() {
            echo __CLASS__;  // N\X
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [\_\_FUNCTION\_\_](__function__.ini.html)
+ [\_\_METHOD\_\_](__method__.ini.html)
+ [\_\_TRAIT\_\_](__trait__.ini.html)
+ [get\_class()](get_class.ini.html)
+ [Magic Constants](magic-constant.ini.html)
