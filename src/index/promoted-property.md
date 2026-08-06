# Promoted Properties
Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation.

Introduced in version 8.0, constructor property promotion lets a visibility modifier, ``public``, ``protected``, or ``private``, and optionally a type declaration, be added directly to a constructor parameter. PHP then declares a property of the same name on the class and assigns it the parameter's value automatically, without any explicit ``$this->property = $property;`` line inside the constructor body.

This mainly removes boilerplate in classes whose constructor does nothing but assign incoming arguments to properties, such as data transfer objects or value objects. Promoted and non-promoted parameters can be mixed in the same constructor, but a promoted property cannot also have a separate property declaration elsewhere in the class, and the feature is not available in abstract constructors or interface methods, since those have no body to promote into.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/promoted-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/promoted-property.html","name":"Promoted Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:17:17 +0000","dateModified":"Tue, 04 Aug 2026 11:17:17 +0000","description":"Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Promoted Properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Properties](property.ini.html)
+ [Class](class.ini.html)
+ [Constructor](constructor.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Var](var.ini.html)
