# Asymmetric Visibility
Asymmetric visibility is a feature of PHP class properties. They refer to the situation where different scopes may read, or ``get`` or write, or ``set``. 

Traditionally, the visibility options, ``private``, ``protected`` and ``public``, constraints the access to the property, both in reading and writing. With asymmetric visibility, there may be contexts may have different rights of access.
```php
<?php

class X {
    public private(set) string $p = 'abc';
    
    function setP($p) {
        $this->p = $p;
    }
}

$x = new X();
echo $x->p; // abc
$x->setP('def'); 
echo $x->p; // def

// 
$x->p = 'ghi';

?>
```

## See Also

+ [PHP Asymmetric Visibility RFC: An In-Depth Look](https://developerjoy.co/blog/php-asymmetric-visibility-rfc-an-in-depth-look)
+ [New in PHP 8.5: Asymmetric Visibility for Static Properties](https://chrastecky.dev/programming/new-in-php-8-5-asymmetric-visibility-for-static-properties)

Related : [Visibility](Visibility), [Properties](Properties), [Asymmetric Property](Asymmetric Property), [Property Type Declaration](Property Type Declaration), [Var](Var)
