# Property Hook
Property hooks are a feature of PHP 8.4, where accessors can be defined with the property. 

Hooks are for ``set`` and ``get``: they allow extra commands to be always executed at setting or getting time of a property. 

Hooks look like the magic methods ``__set`` and ``__get``, with a few differences: they are dedicated to a property, and easier to write.

Property hooks are also called ``Property Accessors``, in other languages.
```php
<?php

    class X {
        public string $property {
            // this is the single line definition of a hook
            // the expression is the returned value
            get => $this->property . '1';
    
            set {
                // $value is the unique parameter of that function
                $this->property = $value;
            }
        }
    }

?>
```

## See Also

+ [PHP 8.4 Property Hooks](https://ashallendesign.co.uk/blog/php-84-property-hooks)
+ [PHP 8.4 Property Hooks: The Ultimate Guide for Developers](https://qirolab.com/posts/php-84-property-hooks)
+ [PHP RFC: Property hook improvements](https://wiki.php.net/rfc/hook_improvements)
+ [A Guide to PHP 8.4 Property Hooks](https://www.zend.com/blog/php-8-4-property-hooks)
+ [PHP’s New Property Hooks Are Here—But Should You Use Them?](https://hackernoon.com/phps-new-property-hooks-are-herebut-should-you-use-them)
+ [Using property hooks in PHP](https://dyrynda.com.au/blog/using-property-hooks-in-php)

Related : [Properties](Properties), [__get() Method](__get() Method), [__set() Method](__set() Method), [Magic Methods](Magic Methods), [Double Arrow](Double Arrow), [Magic Constants](Magic Constants), [Virtual Property](Virtual Property), [Writeable](Writeable), [Class Getter Method](Class Getter Method), [Property Type Declaration](Property Type Declaration)
