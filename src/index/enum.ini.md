# Enumeration (enum)
Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/enum.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/enum.ini.html","name":"Enumeration (enum)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:41:36 +0000","dateModified":"Tue, 07 Jul 2026 07:41:36 +0000","description":"Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Enumeration (enum).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.enumerations.php)**
## See Also

+ [Enumerations in PHP](https://www.delftstack.com/howto/php/php-enum/)
+ [5 Pitfalls of Upgrade to Native PHP Enums and How to Avoid Them](https://tomasvotruba.com/blog/five-pitfalls-of-upgrade-to-native-php-enums-and-how-to-avoid-them/)
+ [On the use of enums](https://peakd.com/hive-168588/@crell/on-the-use-of-enums)
+ [Enum in PHP — Real life examples](https://medium.com/@danielarcher/enum-in-php-real-life-examples-a596ba421f3c)

## Related

+ [Enumeration Case](enum-case.ini.html)
+ [Collection](collection.ini.html)
+ [Class Interface Trait Enumeration (CITE)](cite.ini.html)
+ [Backed Enum](backed-enum.ini.html)
+ [BackedEnum](backedenum.ini.html)
+ [Case](case.ini.html)
+ [http\_build\_query()](http_build_query.ini.html)
+ [Unbacked Enum](unbacked-enum.ini.html)
+ [UnitEnum](unitenum.ini.html)
+ [Dynamic Class Constant](dynamic-class-constant.ini.html)
+ [Algebraic Data Type](algebraic-data-type.ini.html)
+ [Compile-time Evaluation](compile-time-evaluation.ini.html)
+ [Sealed Class](sealed-class.ini.html)
+ [Sum Type](sum-type.ini.html)

## Related packages

+ [myclabs/php-enum](https://packagist.org/packages/myclabs/php-enum)
+ [dasprid/enum](https://packagist.org/packages/dasprid/enum)
+ [spatie/enum](https://packagist.org/packages/spatie/enum)
