# Base
The term ``base`` has two common meanings:

+ Base class: a parent class from which other classes inherit. A base class defines common attributes and behavior shared by all subclasses. A base class is declared with ``class`` and extended with ``extends``. Abstract base classes use the ``abstract`` keyword to enforce method implementation in subclasses
+ Numeric base: the number of unique digits in a positional numeral system. PHP natively supports base 2, binary, base 8, octal, base 10, decimal, and base 16, hexadecimal integer literals. The ``base_convert()``, ``bindec()``, ``octdec()``, ``decoct()``, ``hexdec()``, and ``dechex()`` functions convert between bases
+ Base 64 encoding: an encoding method a binary-to-text encoding scheme that represents binary data in an ASCII string format.

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

Related : [Abstract Class](Abstract Class), [Inheritance](Inheritance), [Numeric Base](Numeric Base), [Base Class](Base Class), [Binary](Binary), [Hexadecimal Integer](Hexadecimal Integer), [Base 64 Encoding](Base 64 Encoding)
