# Void
Void is a return type. It marks methods which do not return anything. 

Indeed, void methods should not use the return statement, or, when they do, use it without any argument. 

Void is only possible with methods, closures, functions and arrow functions. It makes no sense with properties or parameters.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/void.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/void.ini.html","name":"Void","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Void is a return type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Void.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo() : void {}

?>
```

**[Documentation](https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions)**
## See Also

+ [Type Hinting No Return(Void)](https://riptutorial.com/php/example/20542/type-hinting-no-return-void-)

## Related

+ [Null](null.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Return Value](return-value.ini.html)
+ [Special Types](special-typehint.ini.html)
