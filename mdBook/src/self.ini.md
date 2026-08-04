# Self
``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current written class.

``self`` is traditionally written lower-case, although it is case-insensitive. ``self`` is a PHP keyword.
```php
<?php

class X {
    private const X = 1;
    
    function foo() {
        // same as \X::C;
        return self::C;
    }
}

?>
```

## See Also

+ [PHP self Vs this](https://phppot.com/php/php-self-vs-this/)
+ [PHP $this Keyword](https://www.studytonight.com/php/php-this-keyword)

Related : [static](static), [parent](parent), [Keyword](Keyword), [Child Class](Child Class), [Language Construct](Language Construct), [PHP Natives](PHP Natives), [Special Types](Special Types), [Late Static Binding](Late Static Binding), [Relative Types](Relative Types)
