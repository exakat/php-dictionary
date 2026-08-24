# Readable
Something is readable when its current value may be accessed. For example, a variable is readable, as it may be read at any moment. On the other hand, a property may be unreadable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, constants, class constants with the correct visibility, array elements are readable.

Files are another object that requires permissions. This time, the operating system provides the permissions. A file is readable when the ``is_readable()`` function returns true.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html","name":"Readable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:09:35 +0000","dateModified":"Fri, 14 Aug 2026 08:09:35 +0000","description":"Something is readable when its current value may be accessed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/container.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-element.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/debt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fopen.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/maintenability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-readable.php"},{"@type":"CreativeWork","name":"Visibility","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.visibility.php"},{"@type":"CreativeWork","name":"is_writable","url":"https:\/\/www.php.net\/manual\/en\/function.is-writable.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"readable"}]}]}</script>
```php
<?php

    $x = 3;
    echo $x;

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-readable.php)**
## See Also

+ [Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
+ [is_writable](https://www.php.net/manual/en/function.is-writable.php)

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
