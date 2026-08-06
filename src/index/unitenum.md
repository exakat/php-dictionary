# UnitEnum
The ``UnitEnum`` interface identifies any enumeration. It works on both enumerations and backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensure the ``enum::cases()`` method is available, that lists all cases in that enumeration.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unitenum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unitenum.html","name":"UnitEnum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``UnitEnum`` interface identifies any enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/UnitEnum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

enum E { case A;} 
enum F: int { case B = 1;} 

var_dump(E::A instanceof UnitEnum); // true
var_dump(F::B instanceof UnitEnum); // true

?>
```

**[Documentation](https://www.php.net/manual/en/class.unitenum.php)**
## See Also

+ [Use the PHP UnitEnum::cases() during testing](https://medium.com/@kczereczon/usage-php-unitenum-cases-in-testing-cf178a5ac372)

## Related

+ [Enumeration (enum)](enum.ini.html)
+ [BackedEnum](backedenum.ini.html)
+ [Interface](interface.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
