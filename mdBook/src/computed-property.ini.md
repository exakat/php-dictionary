# Computed Property
A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code. The computation is declared inline with the property itself, and the language runtime invokes it transparently when the property is read.

Languages such as Swift, Kotlin, and C# offer computed properties as a first-class syntax:

+ In Swift, ``var area: Double { width * height }`` defines a read-only computed property.
+ In C#, ``public int Area => Width * Height;`` uses an expression-bodied property.
+ In Kotlin, ``val area get() = width * height`` attaches a getter expression directly to the declaration.

In all these cases the computation is expressed as part of the property declaration, not as a separate method the programmer must name and call.

PHP does not support computed properties natively. PHP 8.4 introduced property hooks, with ``get`` and ``set``, which come close: they attach getter and setter logic to a property declaration. However, property hooks still require explicit block or arrow syntax inside the property body and are closer to accessor methods than to the lightweight ``expr``-body computed properties found in Swift or Kotlin.

Before PHP 8.4, the only option was a dedicated ``getter`` method, e.g. ``getArea()``, which is a named method, not a property.
```php
<?php

    // PHP 8.4 property hook: closest available approximation.
    class Rectangle {
        public function __construct(
            public float $width,
            public float $height,
        ) {}
    
        // get hook — behaves like a computed property, but requires
        // explicit hook syntax rather than a bare expression.
        public float $area {
            get => $this->width * $this->height;
        }
    }
    
    $r = new Rectangle(3.0, 4.0);
    echo $r->area; // 12.0
    
    // Before PHP 8.4, a dedicated method was the only option:
    // public function getArea(): float { return $this->width * $this->height; }

?>
```

## See Also

+ [Swift computed properties](https://docs.swift.org/swift-book/documentation/the-swift-programming-language/properties/#Computed-Properties)
+ [Kotlin properties](https://kotlinlang.org/docs/properties.html)
+ [C# properties](https://learn.microsoft.com/en-us/dotnet/csharp/programming-guide/classes-and-structs/properties)

Related : [Property Hook](Property Hook), [Virtual Property](Virtual Property), [Properties](Properties), [__get() Method](__get() Method), [Class Getter Method](Class Getter Method)
