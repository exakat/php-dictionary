# get\_class\_vars()
``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array.

Unlike ``get_object_vars()``, which operates on an object instance, ``get_class_vars()`` takes a class name as a string and returns the default values of the class's declared properties, including inherited ones.

Only properties accessible from the current scope are returned.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class_vars.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class_vars.html","name":"get_class_vars()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:23 +0000","dateModified":"Wed, 05 Aug 2026 08:17:23 +0000","description":"get_class_vars() is a PHP native function that returns the default properties of a class as an associative array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class_vars().html"]}],"keywords":["native function","introspection"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/introspection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.get-class-vars.php"},{"@type":"CreativeWork","name":"PHP get_class_vars() Function","url":"https:\/\/www.geeksforgeeks.org\/php\/php-get_class_vars-function\/"},{"@type":"CreativeWork","name":"The get_class_vars Function - Getting Class Properties in PHP","url":"https:\/\/code.mu\/en\/php\/manual\/oop\/get_class_vars\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"get_class_vars"}]}]}</script>
```php
<?php

class Foo {
    public string $name = 'default';
    protected int $count = 0;
    private bool $active = true;
}

$vars = get_class_vars(Foo::class);
print_r($vars);
// Array ( [name] => default )  // only public properties visible in this scope

?>
```

**[Documentation](https://www.php.net/manual/en/function.get-class-vars.php)**
## See Also

+ [PHP get_class_vars() Function](https://www.geeksforgeeks.org/php/php-get_class_vars-function/)
+ [The get_class_vars Function - Getting Class Properties in PHP](https://code.mu/en/php/manual/oop/get_class_vars/)

## Related

+ [get\_class()](get_class.html)
+ [get\_object\_vars()](get_object_vars.html)
+ [Reflection](reflection.html)
+ [Introspection](introspection.html)
