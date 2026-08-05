# Virtual Property
A virtual property is a class property, whose property hooks don't use the value. The virtual property has no need for actual storage, and relies on other means to provide the value. In effect, they rely on the property hooks ``get`` and ``set`` to access the value. They also rely on other properties, global variables or data generators to provide a value.

A virtual property cannot be ``static``, as property hooks are not supported for this type of properties.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/virtual-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/virtual-property.ini.html","name":"Virtual Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A virtual property is a class property, whose property hooks don't use the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Virtual Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class Counter {
    private $count = 1;
    
    // $next is a virtual property : it doesn't rely on $this->next;
    public $next {
        get => $this->count + 1 + rand(0, 10);
        set {}
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.property-hooks.php)**
## See Also

+ [PHP 8.4: Property Hooks, Virtual Properties, and Potential Issues](https://geekytomato.com/php-8-4-property-hooks-virtual-properties-and-potential-issues/)

## Related

+ [Properties](property.ini.html)
+ [Property Hook](property-hook.ini.html)
+ [Backed Property](backed-property.ini.html)
