# Single Quotes Strings
Single quoted strings are strings that include a literal value. 

This is an simpler version of the double-quoted strings. 

It is possible to include variables ``$var``, single-dimension arrays ``$array[1]`` or ``$array[index]``, and single-dereferencing object members ``$object->member``. More complex expressions require usage of curly braces ``{$}``, or the usage of the dot operator.

Double quoted strings use the anti-slash ``\`` to escape special characters, such as the anti-slash and the ``$`` sign.

Single quote is also a simple characters. It is used for string, and as a delimiter in many other languages, such as HTML, XML or SQL.

```php
<?php

    // single quoted string : all literal values
    $name = 'elephpant loves $signs.'; 
    
    // double quoted string : variable value will be replaced at execution time.
    $greeting = "Hello! $name"; 
    
    // identical to
    $greeting = 'Hello! '.$name; 

?>
```

Related : [Double Quotes Strings](Double Quotes Strings), [Heredocs](Heredocs), [Interpolation](Interpolation), [String](String), [Dollar $](Dollar $), [Balanced](Balanced), [Oblic Quotes](Oblic Quotes), [Single](Single)
