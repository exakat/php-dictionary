# Promoted Properties
Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation.

Introduced in version 8.0, constructor property promotion lets a visibility modifier, ``public``, ``protected``, or ``private``, and optionally a type declaration, be added directly to a constructor parameter. PHP then declares a property of the same name on the class and assigns it the parameter's value automatically, without any explicit ``$this->property = $property;`` line inside the constructor body.

This mainly removes boilerplate in classes whose constructor does nothing but assign incoming arguments to properties, such as data transfer objects or value objects. Promoted and non-promoted parameters can be mixed in the same constructor, but a promoted property cannot also have a separate property declaration elsewhere in the class, and the feature is not available in abstract constructors or interface methods, since those have no body to promote into.
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

## See Also

+ [Class constructor property promotion](https://php.watch/versions/8.0/constructor-property-promotion)

Related : [Properties](Properties), [Class](Class), [Constructor](Constructor), [Property Type Declaration](Property Type Declaration), [Var](Var)
