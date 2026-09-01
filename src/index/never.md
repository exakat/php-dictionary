# Never Type
``never``, the never type, is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop.

``never`` is the lowest type available. Nothing can be a sub-type of ``never`` but never can be the subtype of anything.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/never.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/never.html","name":"Never Type","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 15:06:46 +0000","dateModified":"Sun, 30 Aug 2026 15:06:46 +0000","description":"never, the never type, is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/never.html"]}],"alternateName":["never-type"],"keywords":["type","feature","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-typehint.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/noreturn_type"},{"@type":"CreativeWork","name":"The never Return Type for PHP","url":"https:\/\/betterprogramming.pub\/the-never-return-type-for-php-802fbe2fa303"},{"@type":"CreativeWork","name":"Using \u2018never\u2019 return type in PHP (PHP 8.1+)","url":"https:\/\/www.slingacademy.com\/article\/using-never-return-type-in-php-php-81\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"never"}]}]}</script>
```php
<?php

function headers() : never {
    headers('Location: https://www.exakat.io/');
    die();
}

?>
```

**[Documentation](https://wiki.php.net/rfc/noreturn_type)**
## See Also

+ [The never Return Type for PHP](https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303)
+ [Using ‘never’ return type in PHP (PHP 8.1+)](https://www.slingacademy.com/article/using-never-return-type-in-php-php-81/)

## Related

+ [Type System](type.html)
+ [PHP Natives](native-type.html)
+ [Return Value](return-value.html)
+ [Special Types](special-typehint.html)
