# Promoted Properties
Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation.

Introduced in version 8.0, constructor property promotion lets a visibility modifier, ``public``, ``protected``, or ``private``, and optionally a type declaration, be added directly to a constructor parameter. PHP then declares a property of the same name on the class and assigns it the parameter's value automatically, without any explicit ``$this->property = $property;`` line inside the constructor body.

This mainly removes boilerplate in classes whose constructor does nothing but assign incoming arguments to properties, such as data transfer objects or value objects. Promoted and non-promoted parameters can be mixed in the same constructor, but a promoted property cannot also have a separate property declaration elsewhere in the class, and the feature is not available in abstract constructors or interface methods, since those have no body to promote into.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promoted-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promoted-property.html","name":"Promoted Properties","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promoted-property.html"]}],"keywords":["property","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.decon.php#language.oop5.decon.constructor.promotion"},{"@type":"CreativeWork","name":"Class constructor property promotion","url":"https:\/\/php.watch\/versions\/8.0\/constructor-property-promotion"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"promoted-property"}]}]}</script>
```php
<?php
    
    class X {
        function __construct($property, public int $promotedProperty) {
            $this->property = $property; // manual initialization
            
            // not initilization of $this->promotedProperty, as it is automatic
            echo $promotedProperty; // the variable version is available for further processing
            echo $this->promotedProperty; // the property is available immediately
        }
    }
    
?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion)**
## See Also

+ [Class constructor property promotion](https://php.watch/versions/8.0/constructor-property-promotion)

## Related

+ [Properties](property.html)
+ [Class](class.html)
+ [Constructor](constructor.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Var](var.html)
