# Nested Attributes
Nested Attributes is a feature where an attribute may be called with other attributes.

Arguments of attributes may be literals, such as integer or strings: they can also be other objects. 

This feature was introduced in version 8.1. The objects must be created with a new expression, with their respective argument position or name. The created object is not necessarily an attribute itself, and they may also be created with another new expression.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nested-attribute.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nested-attribute.html","name":"Nested Attributes","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 08:22:04 +0000","dateModified":"Wed, 12 Aug 2026 08:22:04 +0000","description":"Nested Attributes is a feature where an attribute may be called with other attributes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Nested Attributes.html"]}],"keywords":["attribute","feature","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nesting.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/new_in_initializers"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nested-attribute"}]}]}</script>
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

+ [Attribute](attribute.html)
+ [Nesting](nesting.html)
