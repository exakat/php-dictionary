# Enumeration (enum)
Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html","name":"Enumeration (enum)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 15:44:25 +0000","dateModified":"Mon, 10 Aug 2026 15:44:25 +0000","description":"Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"]}],"alternateName":["enumeration","enumerations"],"keywords":["keyword","feature","cite","structure","enum"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backedenum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http_build_query.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unbacked-enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unitenum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algebraic-data-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time-evaluation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sealed-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.enumerations.php"},{"@type":"CreativeWork","name":"Enumerations in PHP","url":"https:\/\/www.delftstack.com\/howto\/php\/php-enum\/"},{"@type":"CreativeWork","name":"5 Pitfalls of Upgrade to Native PHP Enums and How to Avoid Them","url":"https:\/\/tomasvotruba.com\/blog\/five-pitfalls-of-upgrade-to-native-php-enums-and-how-to-avoid-them\/"},{"@type":"CreativeWork","name":"On the use of enums","url":"https:\/\/peakd.com\/hive-168588\/@crell\/on-the-use-of-enums"},{"@type":"CreativeWork","name":"Enum in PHP \u2014 Real life examples","url":"https:\/\/medium.com\/@danielarcher\/enum-in-php-real-life-examples-a596ba421f3c"},{"@type":"CreativeWork","name":"PHP Enums: A Complete Guide with Real Examples","url":"https:\/\/oatllo.com\/php-enums-complete-guide"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"enum"}]}]}</script>
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
+ [PHP Enums: A Complete Guide with Real Examples](https://oatllo.com/php-enums-complete-guide)

## Related

+ [Enumeration Case](enum-case.html)
+ [Collection](collection.html)
+ [Class Interface Trait Enumeration (CITE)](cite.html)
+ [Backed Enum](backed-enum.html)
+ [BackedEnum](backedenum.html)
+ [Case](case.html)
+ [http\_build\_query()](http_build_query.html)
+ [Unbacked Enum](unbacked-enum.html)
+ [UnitEnum](unitenum.html)
+ [Dynamic Class Constant](dynamic-class-constant.html)
+ [Algebraic Data Type](algebraic-data-type.html)
+ [Compile-time Evaluation](compile-time-evaluation.html)
+ [Sealed Class](sealed-class.html)
+ [Sum Type](sum-type.html)

## Related packages

+ [myclabs/php-enum](https://packagist.org/packages/myclabs/php-enum)
+ [dasprid/enum](https://packagist.org/packages/dasprid/enum)
+ [spatie/enum](https://packagist.org/packages/spatie/enum)
