# HTML Entity
HTML entities are special character sequences, that represents a single character. Such representation is not needed for simple characters, such as the Latin alphabet. On the other hand, they are needed for unusual characters, in particular when the encoding cannot be guaranteed to support it. 

They are also needed to display characters, which have a special meaning, such as double quote ``"``, or the greater ``>`` and lesser signs ``<``. 

HTML entities makes the source code longer, and harder to read. 

HTML entities may have a letter representation, while they always have a numeric representation. For example, the ampersand may be written ``\&amp;`` and ``\&#38;``.

PHP has functions to decode and encode: ``htmlentities()`` and ``htmlentities_decode()``, ``htmlspecialchars()`` and ``htmlspecialchars_decode()``. The ``get_html_translation_table()`` provides the full list of supported entities.
```php
<?php

echo htmlentities('&'); // &amp;

print htmlentities_decode('&lt;A&gt;'); // <A>

?>
```

## See Also

+ [Named character references](https://html.spec.whatwg.org/multipage/named-characters.html)

Related : [HyperText Markup Language (HTML)](HyperText Markup Language (HTML)), [Encoding](Encoding), [Text Encoding](Text Encoding), [HTML Escaping](HTML Escaping), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS))
