# BackedEnum
The ``BackedENum`` interface identifies an enumeration with a string or int value. It works only on backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensures the ``enum::tryFrom()`` and ``enum::from()`` methods and the ``enum::$value`` property are available, to convert from and to scalars.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backedenum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backedenum.html","name":"BackedEnum","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:51:50 +0000","dateModified":"Tue, 11 Aug 2026 20:51:50 +0000","description":"The BackedENum interface identifies an enumeration with a string or int value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backedenum.html"]}],"keywords":["enum","interface"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unitenum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/int.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unbacked-enum.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.backedenum.php"},{"@type":"CreativeWork","name":"Use the PHP UnitEnum::cases() during testing","url":"https:\/\/medium.com\/@kczereczon\/usage-php-unitenum-cases-in-testing-cf178a5ac372"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backedenum"}]}]}</script>
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

+ [Enumeration (enum)](enum.html)
+ [UnitEnum](unitenum.html)
+ [String](string.html)
+ [integer](int.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
+ [Unbacked Enum](unbacked-enum.html)
