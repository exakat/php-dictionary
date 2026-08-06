# Readable
Something is readable when its current value may be accessed. For example, a variable is readable, as it may be read at any moment. On the other hand, a property may be unreadable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, constants, class constants with the correct visibility, array elements are readable.

Files are another object that requires permissions. This time, the operating system provides the permissions. A file is readable when the ``is_readable()`` function returns true.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readable.html","name":"Readable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:38 +0000","dateModified":"Fri, 19 Jun 2026 21:29:38 +0000","description":"Something is readable when its current value may be accessed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Readable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $x = 3;
    echo $x;

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-readable.php)**
## Related

+ [Visibility](visibility.ini.html)
+ [Variables](variable.ini.html)
+ [Static Property](static-property.ini.html)
+ [Properties](property.ini.html)
+ [Container](container.ini.html)
+ [Array Element](array-element.ini.html)
+ [Writeable](writeable.ini.html)
+ [Technical Debt](debt.ini.html)
+ [fopen()](fopen.ini.html)
+ [Maintenability](maintenability.ini.html)
+ [Writable](writable.ini.html)
+ [Floating Point Numbers](float.ini.html)
