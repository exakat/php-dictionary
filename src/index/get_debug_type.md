# get\_debug\_type()
``get_debug_type()`` returns the type of a value as a string, using the same names that appear in type declarations, rather than the historical names used by ``gettype()``.

For scalars and arrays, the result is one of ``int``, ``float``, ``string``, ``bool``, ``array`` or ``null``. For an object, it returns the fully qualified class name, including an anonymous class, which is reported as ``class@anonymous`` followed by its file and location. For a resource, it returns the specific resource type, such as ``stream`` or ``curl``, instead of the generic ``resource`` reported by ``gettype()``.

``get_debug_type()`` exists because ``gettype()`` predates PHP's type system, and returns names such as ``integer``, ``boolean`` or ``double``, which never match the ``int``, ``bool`` or ``float`` used in a parameter or return type declaration, making it awkward to build accurate error messages from ``gettype()`` output alone.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_debug_type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_debug_type.html","name":"get_debug_type()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 18:46:31 +0000","dateModified":"Fri, 25 Sep 2026 18:46:31 +0000","description":"get_debug_type() returns the type of a value as a string, using the same names that appear in type declarations, rather than the historical names used by gettype()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_debug_type.html"]}],"keywords":["native function","type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_dump.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.get-debug-type.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"get_debug_type"}]}]}</script>
```php
<?php

    function describe(mixed $value): string {
        return get_debug_type($value);
    }

    echo describe(42);                          // int
    echo describe('hi');                        // string
    echo describe(new stdClass());               // stdClass
    echo describe(fopen('php://memory', 'r'));   // stream

?>
```

**[Documentation](https://www.php.net/manual/en/function.get-debug-type.php)**
## Related

+ [gettype()](gettype.html)
+ [var\_dump()](var_dump.html)
+ [Type Juggling](type-juggling.html)
