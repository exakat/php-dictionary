# Property Hook
Property hooks are a feature of PHP 8.4, where accessors can be defined with the property. 

Hooks are for ``set`` and ``get``: they allow extra commands to be always executed at setting or getting time of a property. 

Hooks look like the magic methods ``__set`` and ``__get``, with a few differences: they are dedicated to a property, and easier to write.

Property hooks are also called ``Property Accessors``, in other languages.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/property-hook.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/property-hook.html","name":"Property Hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 13:35:39 +0000","dateModified":"Thu, 02 Jul 2026 13:35:39 +0000","description":"Property hooks are a feature of PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Property Hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        public string $property {
            // this is the single line definition of a hook
            // the expression is the returned value
            get => $this->property . '1';
    
            set {
                // $value is the unique parameter of that function
                $this->property = $value;
            }
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.property-hooks.php)**
## See Also

+ [PHP 8.4 Property Hooks](https://ashallendesign.co.uk/blog/php-84-property-hooks)
+ [PHP 8.4 Property Hooks: The Ultimate Guide for Developers](https://qirolab.com/posts/php-84-property-hooks)
+ [PHP RFC: Property hook improvements](https://wiki.php.net/rfc/hook_improvements)
+ [A Guide to PHP 8.4 Property Hooks](https://www.zend.com/blog/php-8-4-property-hooks)
+ [PHP’s New Property Hooks Are Here—But Should You Use Them?](https://hackernoon.com/phps-new-property-hooks-are-herebut-should-you-use-them)
+ [Using property hooks in PHP](https://dyrynda.com.au/blog/using-property-hooks-in-php)

## Related

+ [Properties](property.ini.html)
+ [\_\_get() Method](__get.ini.html)
+ [\_\_set() Method](__set.ini.html)
+ [Magic Methods](magic-method.ini.html)
+ [Double Arrow](double-arrow.ini.html)
+ [Magic Constants](magic-constant.ini.html)
+ [Virtual Property](virtual-property.ini.html)
+ [Writeable](writeable.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
