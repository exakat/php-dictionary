# Base
The term ``base`` has two common meanings:

+ Base class: a parent class from which other classes inherit. A base class defines common attributes and behavior shared by all subclasses. A base class is declared with ``class`` and extended with ``extends``. Abstract base classes use the ``abstract`` keyword to enforce method implementation in subclasses
+ Numeric base: the number of unique digits in a positional numeral system. PHP natively supports base 2, binary, base 8, octal, base 10, decimal, and base 16, hexadecimal integer literals. The ``base_convert()``, ``bindec()``, ``octdec()``, ``decoct()``, ``hexdec()``, and ``dechex()`` functions convert between bases
+ Base 64 encoding: an encoding method a binary-to-text encoding scheme that represents binary data in an ASCII string format.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base.html","name":"Base","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"The term base has two common meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base.html"]}],"keywords":["concept","oop","number","base64","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-base.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexadecimal-integer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base64.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.base-convert.php"},{"@type":"CreativeWork","name":"PHP Master: Base Converting and Binary Operators","url":"https:\/\/www.sitepoint.com\/base-converting-and-binary-operators\/"},{"@type":"CreativeWork","name":"Base Conversion In PHP Using Built-In Functions","url":"https:\/\/www.exploringbinary.com\/base-conversion-in-php-using-built-in-functions\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"base"}]}]}</script>
```php
<?php

    // Base class (parent class)
    abstract class Shape {
        abstract public function area(): float;
    }
    
    class Circle extends Shape {
        public function __construct(private float $radius) {}
        public function area(): float { return M_PI * $this->radius ** 2; }
    }
    
    // Numeric base conversions
    echo base_convert('ff', 16, 10); // 255  (hex -> decimal)
    echo base_convert('255', 10, 2); // 11111111  (decimal -> binary)
    
    echo 0b11111111; // 255  (binary literal)
    echo 0xFF;       // 255  (hex literal)
    echo 0377;       // 255  (octal literal)

?>
```

**[Documentation](https://www.php.net/manual/en/function.base-convert.php)**
## See Also

+ [PHP Master: Base Converting and Binary Operators](https://www.sitepoint.com/base-converting-and-binary-operators/)
+ [Base Conversion In PHP Using Built-In Functions](https://www.exploringbinary.com/base-conversion-in-php-using-built-in-functions/)

## Related

+ [Abstract Class](abstract-class.html)
+ [Inheritance](inheritance.html)
+ [Numeric Base](numeric-base.html)
+ [Base Class](base-class.html)
+ [Binary](binary.html)
+ [Hexadecimal Integer](hexadecimal-integer.html)
+ [Base 64 Encoding](base64.html)
