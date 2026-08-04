# Anonymous
An anonymous structure is a structure that usually has a name, but may also go without it. When the structure is anonymous, some features are not available, such as creating or calling a new instance by using its name. Such operations must now handled by creating the asset, and handing it across the code base.

There a several structures which have an anonymous version: 

+ Functions: there are two types: closures and arrow functions
+ Method: the magic method ``__invoke()``
+ Classes
+ Constants: basically, it is a literal value
+ Catch: in this case, the exception is caught, but it is not provided in a related variable

Some structures are always named: variables, properties, traits, interfaces, enums.

Anonymous structures should not be confused with dynamic structures: these structures are defined with a name which is stored in a variable, or a similar data container. In fact, dynamic structures often rely on a name to be usable. This is the case of variables, with ``$$variable``.
```php
<?php

    $closure = function () {} ; 

    $arrowFunction = fn() => 1;
    
    'literal value';
    
    // an object of an anonymous class
    new class() {}; 
    
    try {}
    catch(Exception ) {}

?>
```

## See Also

+ [The Art of Being Anonymous in PHP](https://www.exakat.io/the-art-of-being-anonymous-in-php/)

Related : [Anonymous Function](Anonymous Function), [Anonymous Class](Anonymous Class), [Anonymous Catch](Anonymous Catch), [Dynamic Call](Dynamic Call), [__invoke() Method](__invoke() Method), [Anonymous Constant](Anonymous Constant), [Name Conventions](Name Conventions), [Name](Name), [Structure](Structure)
