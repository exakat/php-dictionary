# UnitEnum
The ``UnitEnum`` interface identifies any enumeration. It works on both enumerations and backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensure the ``enum::cases()`` method is available, that lists all cases in that enumeration.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unitenum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unitenum.html","name":"UnitEnum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``UnitEnum`` interface identifies any enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/UnitEnum.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unitenum"}]}]}</script>
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

+ [Enumeration (enum)](enum.html)
+ [BackedEnum](backedenum.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
