# __toString() Method
``__tostring()`` is a magic method: it is called when the object has to be converted into a string.

That way, it is possible to dynamically convert the object to a string and display it, or transmit it to another part of the application. 

``__toString()`` is called when ``strict_types`` is not active. Otherwise, passing an object to a string parameter yields an error: it requires an explicit type cast.

``__toString()`` is always called in concatenation, and string interpolation.

There is no magic method to convert an object to another type.

``__toString()`` must be declared ``public``, take no arguments, and return a ``string``: returning anything else triggers a fatal error, or a ``TypeError`` when a ``: string`` return type is declared.

Since PHP 8.0, any class that defines ``__toString()`` automatically implements the ``Stringable`` interface, without having to declare it explicitly.

Since PHP 7.4, exceptions may be thrown from within ``__toString()``; in earlier versions, doing so resulted in a fatal error.
```php
<?php

    class X {
        private $r = 'S';
        private $p = 1;
        private $q = 2;
    
        // Checks the dictionary, or return 0
        function __toString() : string {
        
            // $this->r is used as is
            // $this->p is formatted with quotes
            // $this->q is converted to other values
            return "$this->r '$this->p' ".($this->q ? 'A' : 'B');
        }
    }
    
    echo new X;
    
    $y = (string) new X;

?>
```

## See Also

+ [0](`PHP __toString <https://www.phptutorial.net/php-oop/php-__tostring/>`_)

Related : [strict_types](strict_types), [Magic Methods](Magic Methods), [Cast Operator](Cast Operator), [Concatenation \.](Concatenation \.), [Stringable](Stringable)
