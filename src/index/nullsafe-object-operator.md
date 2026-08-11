# Null Safe Object Operator
The Null Safe Object Operator behaves like the object operator, until the object is null. Then, instead of failing with a fatal error, it returns null.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe-object-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe-object-operator.html","name":"Null Safe Object Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The Null Safe Object Operator behaves like the object operator, until the object is null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Null Safe Object Operator.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nullsafe-object-operator"}]}]}</script>
```php
<?php

function foo() : ?A {}

class A {
    public $property = 1;
}

// This will not fail, but also display nothing
echo foo()?->property;

// This will fail, when foo() returns null
echo foo()->property;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.nullsafe)**
## See Also

+ [This nullsafe operator could come in PHP 8](https://www.amitmerchant.com/nullsafe-operator-php/)
+ [Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator](https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b/)
+ [Null safe operator in practice](https://www.exakat.io/en/null-safe-operator-in-practice/)
+ [Exploring the Null Safe Operator in PHP](https://techvblogs.com/blog/exploring-the-null-safe-operator-php)

## Related

+ [Object Operator ->](object-operator.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.html)
