# Sign
A signed expression is an expression that starts with the ``+`` or the ``-`` token. 

``+`` is the default value, and omitted most of the time. When present, it has no impact on the value, except that it forces the conversion to ``float`` or ``int``, depending on the value. It may also yield a type error, if the conversion is not possible.

``-`` is the explicit value, and the most useful. When present, it turns the value into a ``float`` or ``int``, and multiplies it with ``-1``.

PHP tolerates multiple distinct sign tokens: ``+-+-+1`` is the same as ``1``. It is strongly recommended to avoid using it. When an arbitrary number of sign changes must be executed, a multiplication by ``-1`` works well.

The signs are distinct from numeric values: ``-9`` is not ``minus nine``, but rather ``-1 * 9``. This is needed to handle expressions such as ``- ($a * 2)``, where ``-`` applies to the result of the parenthesis. 

It also leads to the unexpected result that ``-3 ** 2 == -9``. In this case, ``**`` power has priority over ``-``, so this is really ``-(3 ** 2) == -9``.
```php
<?php

    $a = 2;
    $b = -$a; // -2
    
    $c = 123.4;
    $d = +$c; // float(123.4)
    
    // Warning
    
    $e = -3 ** 2; // -9
    
    $f = +-+-+-+-+-4; // -4

?>
```

Related : [Exponent](Exponent), [integer](integer), [Floating Point Numbers](Floating Point Numbers), [Cast Operator](Cast Operator), [Expression](Expression), [Convert](Convert), [Digital Signature](Digital Signature), [Minus -](Minus -), [Positive Integer](Positive Integer), [Plus +](Plus +)
