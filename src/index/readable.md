# Readable
Something is readable when its current value may be accessed. For example, a variable is readable, as it may be read at any moment. On the other hand, a property may be unreadable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, constants, class constants with the correct visibility, array elements are readable.

Files are another object that requires permissions. This time, the operating system provides the permissions. A file is readable when the ``is_readable()`` function returns true.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html","name":"Readable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:38 +0000","dateModified":"Fri, 19 Jun 2026 21:29:38 +0000","description":"Something is readable when its current value may be accessed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Readable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Readable"}]}]}</script>
```php
<?php

    $x = 3;
    echo $x;

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-readable.php)**
## Related

+ [Visibility](visibility.html)
+ [Variables](variable.html)
+ [Static Property](static-property.html)
+ [Properties](property.html)
+ [Container](container.html)
+ [Array Element](array-element.html)
+ [Writeable](writeable.html)
+ [Technical Debt](debt.html)
+ [fopen()](fopen.html)
+ [Maintenability](maintenability.html)
+ [Writable](writable.html)
+ [Floating Point Numbers](float.html)
