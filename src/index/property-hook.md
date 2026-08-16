# Property Hook
Property hooks are a feature of PHP 8.4, where accessors can be defined with the property. 

Hooks are for ``set`` and ``get``: they allow extra commands to be always executed at setting or getting time of a property. 

Hooks look like the magic methods ``__set`` and ``__get``, with a few differences: they are dedicated to a property, and easier to write.

Property hooks are also called ``Property Accessors``, in other languages.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html","name":"Property Hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 13:35:39 +0000","dateModified":"Thu, 02 Jul 2026 13:35:39 +0000","description":"Property hooks are a feature of PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Property Hook.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"property-hook"}]}]}</script>
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

+ [Properties](property.html)
+ [\_\_get() Method](__get.html)
+ [\_\_set() Method](__set.html)
+ [Magic Methods](magic-method.html)
+ [Double Arrow](double-arrow.html)
+ [Magic Constants](magic-constant.html)
+ [Virtual Property](virtual-property.html)
+ [Writeable](writeable.html)
+ [Class Getter Method](getter.html)
+ [Property Type Declaration](type-declaration-property.html)
