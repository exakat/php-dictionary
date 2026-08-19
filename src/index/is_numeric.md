# is\_numeric()
``is_numeric()`` is a PHP native function that checks whether a variable is a number or a numeric string. It returns ``true`` for integers, floats, and strings that represent a valid number, such as ``"42"``, ``"3.14"``, ``" 1e10"``, or ``"0x1A"`` in older PHP versions; it returns ``false`` for non-numeric strings, ``null``, arrays, and booleans.

``is_numeric()`` is deliberately more permissive than ``is_int()`` or ``is_float()``: it accepts leading whitespace, scientific notation, and numeric strings, which makes it well suited to validating raw input from ``$_GET``, ``$_POST``, or a CSV file, where numbers always arrive as strings. It does not, however, confirm the actual internal type, so code that also needs to know whether a value is already an ``int`` versus a numeric ``string`` should combine it with ``is_int()`` or a cast.

Since PHP 8.0, leading numeric strings that also contain trailing non-numeric characters, such as ``"123abc"``, are treated differently from earlier versions: ``is_numeric()`` still returns ``false`` for them, only fully numeric strings qualify.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_numeric.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_numeric.html","name":"is_numeric()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:13:59 +0000","dateModified":"Wed, 05 Aug 2026 08:13:59 +0000","description":"is_numeric() is a PHP native function that checks whether a variable is a number or a numeric string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_numeric().html"]}],"keywords":["function","type-checking","validation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_int.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-numeric-string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-numeric.php"},{"@type":"CreativeWork","name":"Type comparison tables","url":"https:\/\/www.php.net\/manual\/en\/types.comparisons.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is_numeric"}]}]}</script>
```php
<?php

    var_dump(is_numeric(42));      // true
    var_dump(is_numeric('42'));    // true
    var_dump(is_numeric('3.14'));  // true
    var_dump(is_numeric('12abc')); // false

    $id = $_GET['id'] ?? '';
    if (is_numeric($id)) {
        $user = find_user_by_id((int) $id);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-numeric.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [is\_int()](is_int.html)
+ [is\_float()](is_float.html)
+ [is\_string()](is_string.html)
+ [Numeric String](numeric-string.html)
+ [Leading Numeric String](leading-numeric-string.html)
+ [Type Juggling](type-juggling.html)
+ [Validation](validation.html)
