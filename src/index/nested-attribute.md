# Nested Attributes
Arguments of attributes may be literals, such as integer or strings: they can also be other objects. 

This feature was introduced in version 8.1. The objects must be created with a new expression, with their respective argument position or name. The created object is not necessarily an attribute itself, and they may also be created with another new expression.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nested-attribute.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/nested-attribute.html","name":"Nested Attributes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:53:02 +0000","dateModified":"Sat, 11 Jul 2026 14:53:02 +0000","description":"Arguments of attributes may be literals, such as integer or strings: they can also be other objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Nested Attributes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

#[
    MyAttribute(
        new OptionA('a'),
        new OptionB(new OptionC(), 3)
    )
]
function headers() : never {
}

?>
```

**[Documentation](https://wiki.php.net/rfc/new_in_initializers)**
## Related

+ [Attribute](attribute.ini.html)
+ [Nesting](nesting.ini.html)
