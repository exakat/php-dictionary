# Scalar Types
Scalar types refer to the basic data types that hold a single value. 

PHP scalar types include the following:

Integer ``int``: integers are whole numbers without decimal points. 

Float ``float``: floats, also known as floating-point numbers or doubles, represent decimal numbers. 

String  ``string``: strings are sequences of characters enclosed in quotes, single or double.

Boolean  ``bool``: booleans have two possible values: true or false. 

Note that ``null`` is not considered a scalar type, and often behaves differently.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/scalar-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/scalar-type.html","name":"Scalar Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Scalar types refer to the basic data types that hold a single value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Scalar Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Type System](type.ini.html)
+ [Special Types](special-type.ini.html)
+ [String](string.ini.html)
+ [Boolean](boolean.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [integer](integer.ini.html)
+ [Alias Types](alias-types.ini.html)
+ [Constant Scalar Expression](constant-scalar-expression.ini.html)
+ [Literal Types](literal-types.ini.html)
+ [Primitive Obsession](primitive-obsession.ini.html)
+ [Relative Types](relative-types.ini.html)
