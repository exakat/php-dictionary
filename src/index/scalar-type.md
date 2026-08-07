# Scalar Types
Scalar types refer to the basic data types that hold a single value. 

PHP scalar types include the following:

Integer ``int``: integers are whole numbers without decimal points. 

Float ``float``: floats, also known as floating-point numbers or doubles, represent decimal numbers. 

String  ``string``: strings are sequences of characters enclosed in quotes, single or double.

Boolean  ``bool``: booleans have two possible values: true or false. 

Note that ``null`` is not considered a scalar type, and often behaves differently.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html","name":"Scalar Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Scalar types refer to the basic data types that hold a single value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Scalar Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Scalar Types"}]}]}</script>
```php
<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield)**
## See Also

+ [PHP 7 Scalar Type Declaration](https://www.etutorialspoint.com/index.php/tutorial/php-scalar-type-declaration)

## Related

+ [Type System](type.html)
+ [Special Types](special-type.html)
+ [String](string.html)
+ [Boolean](boolean.html)
+ [Floating Point Numbers](float.html)
+ [integer](integer.html)
+ [Alias Types](alias-types.html)
+ [Constant Scalar Expression](constant-scalar-expression.html)
+ [Literal Types](literal-types.html)
+ [Primitive Obsession](primitive-obsession.html)
+ [Relative Types](relative-types.html)
