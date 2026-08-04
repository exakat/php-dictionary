# Attribute
Attributes are machine readable options that may be added PHP code. Since PHP 8.0, they are accessible from PHP. 

Attributes provide extra and customisable options for the PHP engine, static analysis tools and coders alike. 

Attributes are a modern version of the phpdoc comment blocks.

Attributes are backward compatible: they can be used in any PHP version, and are ignored when not supported. 

Attributes may or may not have a supporting class: attributes may be used for their semantic value, or with related code.
```php
<?php

    #[Attribute]
    class X {} // this class is an Attributes
    
    #[X]  // This attribute may be instanciated, and executed
    #[Z]  // This attribute serves only as a flag. No class is available.
    class Y {} // this class is an Attributes

?>
```

## See Also

+ [PHP Native Attributes](https://www.exakat.io/en/php-native-attributes-quick-reference/)
+ [Using PHP Attributes instead of Annotations for Static Analysis](https://www.linkedin.com/pulse/using-php-attributes-instead-annotations-static-carlos-granados-qanwe/)
+ [Unlocking the Power of Attributes in PHP](https://itsimiro.medium.com/unlocking-the-power-of-attributes-in-php-a6af57225bbf)
+ [PHP Language Extensions](https://github.com/DaveLiddament/php-language-extensions)
+ [Playtime with PHP Attributes](https://jump24.co.uk/journal/playtime-with-php-attributes/)
+ [A guide to PHP attributes](https://www.honeybadger.io/blog/php-attributes-guide/)

Related : [PHPdoc](PHPdoc), [PHP Native Attribute](PHP Native Attribute), [Annotations](Annotations), [Attribute Class](Attribute Class), [NoDiscard](NoDiscard), [Properties](Properties), [delayedtargetvalidation](delayedtargetvalidation), [Nested Attributes](Nested Attributes), [Nesting](Nesting), [Sensitive Parameter](Sensitive Parameter), [Code Generation](Code Generation), [Metaclass](Metaclass), [Metaprogramming](Metaprogramming), [Template Metaprogramming (TMP)](Template Metaprogramming (TMP))
