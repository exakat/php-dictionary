# Type Error
A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code. This applies to method arguments, property types and method return types. 

PHP is a dynamically typed language, which means that variable types are not explicitly declared, and PHP determines the data type at runtime. ``TypeError`` can occur when PHP encounters a situation where the expected data type does not match the actual data type.

``TypeError`` apply to typed custom methods, native PHP methods and operators. ``TypeError`` do not represent an invalid value: for example, an argument may be typed ``int``, and later used in a division, while being zero. This situation will yield a different exception.

``TypeError`` are a kind of ``Throwable``. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typerror.html","name":"Type Error","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A TypeError is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typerror.html"]}],"keywords":["error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.typeerror.php"},{"@type":"CreativeWork","name":"Guide to handling PHP TypeError: A step-by-step approach to fixing common programming errors","url":"https:\/\/www.zipy.ai\/blog\/debug-php-typeerror"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"typerror"}]}]}</script>
```php
<?php

function foo(User $user) {

}

try {
    foo('a');
} catch (TypeError $e) {
    print "Wrong type of data\n";
}

?>
```

**[Documentation](https://www.php.net/manual/en/class.typeerror.php)**
## See Also

+ [Guide to handling PHP TypeError: A step-by-step approach to fixing common programming errors](https://www.zipy.ai/blog/debug-php-typeerror)

## Related

+ [Exception](exception.html)
+ [Throwable](throwable.html)
