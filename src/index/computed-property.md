# Computed Property
A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code. The computation is declared inline with the property itself, and the language runtime invokes it transparently when the property is read.

Languages such as Swift, Kotlin, and C# offer computed properties as a first-class syntax:

+ In Swift, ``var area: Double { width * height }`` defines a read-only computed property.
+ In C#, ``public int Area => Width * Height;`` uses an expression-bodied property.
+ In Kotlin, ``val area get() = width * height`` attaches a getter expression directly to the declaration.

In all these cases the computation is expressed as part of the property declaration, not as a separate method the programmer must name and call.

PHP does not support computed properties natively. PHP 8.4 introduced property hooks, with ``get`` and ``set``, which come close: they attach getter and setter logic to a property declaration. However, property hooks still require explicit block or arrow syntax inside the property body and are closer to accessor methods than to the lightweight ``expr``-body computed properties found in Swift or Kotlin.

Before PHP 8.4, the only option was a dedicated ``getter`` method, e.g. ``getArea()``, which is a named method, not a property.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/computed-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/computed-property.html","name":"Computed Property","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:34:43 +0000","dateModified":"Fri, 03 Jul 2026 08:34:43 +0000","description":"A computed property is a property whose value is derived from an expression at the point of access, with no explicit getter method in user code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Computed Property.html"]}],"alternateName":["computed-properties"],"keywords":["unsupported","property","class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/virtual-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getter.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.property-hooks.php"},{"@type":"CreativeWork","name":"Swift computed properties","url":"https:\/\/docs.swift.org\/swift-book\/documentation\/the-swift-programming-language\/properties\/#Computed-Properties"},{"@type":"CreativeWork","name":"Kotlin properties","url":"https:\/\/kotlinlang.org\/docs\/properties.html"},{"@type":"CreativeWork","name":"C# properties","url":"https:\/\/learn.microsoft.com\/en-us\/dotnet\/csharp\/programming-guide\/classes-and-structs\/properties"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"computed-property"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.oop5.property-hooks.php)**
## See Also

+ [Swift computed properties](https://docs.swift.org/swift-book/documentation/the-swift-programming-language/properties/#Computed-Properties)
+ [Kotlin properties](https://kotlinlang.org/docs/properties.html)
+ [C# properties](https://learn.microsoft.com/en-us/dotnet/csharp/programming-guide/classes-and-structs/properties)

## Related

+ [Property Hook](property-hook.html)
+ [Virtual Property](virtual-property.html)
+ [Properties](property.html)
+ [\_\_get() Method](__get.html)
+ [Class Getter Method](getter.html)
