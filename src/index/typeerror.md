# TypeError
A type error refers to an error that occurs when there is a mismatch or violation of data types. It typically happens when a function or operation is performed on a value of an incompatible type. PHP is a dynamically typed language, which means that variable types can change during runtime. However, certain operations and functions expect specific types, and if the actual type doesn't match the expected type, a type error may occur.

In other situations, PHP applies some type juggling, and automatically convert the type to a suitable type. This is often the case to preserve backward compatibility, when a transparent operation make sense. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typeerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typeerror.html","name":"TypeError","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:44 +0000","dateModified":"Mon, 10 Aug 2026 16:53:44 +0000","description":"A type error refers to an error that occurs when there is a mismatch or violation of data types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/TypeError.html"]}],"keywords":["error","exception","native error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/addition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.typeerror.php"},{"@type":"CreativeWork","name":"Type Juggling","url":"https:\/\/www.php.net\/manual\/en\/language.types.type-juggling.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"typeerror"}]}]}</script>
```php
<?php

function foo(int $i) {  }

try {
    foo('5');
} catch (\TypeError $t) {
    print 'Wrong type of argument sent to foo()';
}

// PHP convert the integer 12 to the string '12', to allow the concatenation to proceed. 
$number = 12;
print "There are ".$number." apple in the tree.";


?>
```

**[Documentation](https://www.php.net/manual/en/class.typeerror.php)**
## See Also

+ [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)

## Related

+ [Error](error.html)
+ [Addition](addition.html)
+ [Intersection Type](intersection-type.html)
+ [Type Checking](type-checking.html)
+ [Property Type Declaration](type-declaration-property.html)
