# Allow Dynamic Properties
This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them.

This attribute may be added to any class. It is not necessary with ``stdClass``.

The attributes allow any dynamic property: there is no way to restrict this to a set of names or a number without other means.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/allowdynamicproperties.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/allowdynamicproperties.html","name":"Allow Dynamic Properties","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Allow Dynamic Properties.html"]}],"keywords":["attribute","php attribute","native attribute"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-attribute.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.attributes.classes.php"},{"@type":"CreativeWork","name":"No More Dynamic Properties in PHP 9.","url":"https:\/\/medium.com\/@dotcom.software\/no-more-dynamic-properties-in-php-9-the-language-is-evolving-260fd70da5e8"},{"@type":"CreativeWork","name":"I hate the deprecation of dynamic properties.","url":"https:\/\/www.reddit.com\/r\/PHP\/comments\/10u90o2\/i_hate_the_deprecation_of_dynamic_properties\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"allowdynamicproperties"}]}]}</script>
```php
<?php

class MyClass {
    function foo() {
        // creation of a property, without prior definition
        // This yields an error
        $this->p  = 1;
    }
}

#[AllowDynamicProperty]
class MyOtherClass {
    function foo() {
        // creation of a property, without prior definition
        // This doesn't yields an error
        $this->p  = 1;
    }
}

class MyThirdClass extends Stdclass {
    function foo() {
        // creation of a property, without prior definition
        // This doesn't yields an error, yet no attribute
        $this->p  = 1;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.attributes.classes.php)**
## See Also

+ [No More Dynamic Properties in PHP 9.](https://medium.com/@dotcom.software/no-more-dynamic-properties-in-php-9-the-language-is-evolving-260fd70da5e8)
+ [I hate the deprecation of dynamic properties.](https://www.reddit.com/r/PHP/comments/10u90o2/i_hate_the_deprecation_of_dynamic_properties/)

## Related

+ [PHP Native Attribute](php-native-attribute.html)
+ [PHP Native Attributes](php-attribute.html)
