# BackedEnum
The ``BackedENum`` interface identifies an enumeration with a string or int value. It works only on backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensure the ``enum::tryFrom()`` and ``enum::from()`` methods and the ``enum::$value`` property are available, to convert from and to scalars.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backedenum.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backedenum.ini.html","name":"BackedEnum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``BackedENum`` interface identifies an enumeration with a string or int value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/BackedEnum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

enum E { case A;} 
enum F: int { case B = 1;} 

var_dump(E::A instanceof BackedEnum); // false
var_dump(F::B instanceof BackedEnum); // true

?>
```

**[Documentation](https://www.php.net/manual/en/class.backedenum.php)**
## See Also

+ [Use the PHP UnitEnum::cases() during testing](https://medium.com/@kczereczon/usage-php-unitenum-cases-in-testing-cf178a5ac372)

## Related

+ [Enumeration (enum)](enum.ini.html)
+ [UnitEnum](unitenum.ini.html)
+ [String](string.ini.html)
+ [integer](int.ini.html)
+ [Interface](interface.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [Unbacked Enum](unbacked-enum.ini.html)
