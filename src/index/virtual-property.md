# Virtual Property
A virtual property is a class property, whose property hooks don't use the value. The virtual property has no need for actual storage, and relies on other means to provide the value. In effect, they rely on the property hooks ``get`` and ``set`` to access the value. They also rely on other properties, global variables or data generators to provide a value.

A virtual property cannot be ``static``, as property hooks are not supported for this type of properties.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/virtual-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/virtual-property.html","name":"Virtual Property","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A virtual property is a class property, whose property hooks don't use the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Virtual Property.html"]}],"keywords":["property"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.property-hooks.php"},{"@type":"CreativeWork","name":"PHP 8.4: Property Hooks, Virtual Properties, and Potential Issues","url":"https:\/\/geekytomato.com\/php-8-4-property-hooks-virtual-properties-and-potential-issues\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"virtual-property"}]}]}</script>
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

+ [Properties](property.html)
+ [Property Hook](property-hook.html)
+ [Backed Property](backed-property.html)
