# Object Operator ->
The Object Operator is the operator to access properties and methods from an object. It is ``->``, sometimes called the arrow. 

Depending on the context, those properties and methods must be public, protected or private. When the visibility is not valid, or if the method doesn't exists, PHP yields a Fatal error. Accessing an undefined property is a warning. 

Object Nullsafe Operator is directly related to the Object operator: the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-operator.html","name":"Object Operator ->","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 07:59:18 +0000","dateModified":"Sat, 22 Aug 2026 07:59:18 +0000","description":"The Object Operator is the operator to access properties and methods from an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Object Operator ->.html"]}],"keywords":["feature","operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe-object-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-arrow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-nullsafe-operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php#language.oop5.basic.properties-methods"},{"@type":"CreativeWork","name":"What Is -> In PHP?","url":"https:\/\/www.codingdeeply.com\/what-is-in-php\/"},{"@type":"CreativeWork","name":"Arrow Functions","url":"https:\/\/www.php.net\/manual\/en\/functions.arrow.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"object-operator"}]}]}</script>
```php
<?php

class A {
    public $property = 1;
    
    function foo() {
        return __CLASS__;
    }
}

$a = new a();

// displays 1
echo $a->property; 

// displays \A
echo $a->foo(); 

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods)**
## See Also

+ [What Is -> In PHP?](https://www.codingdeeply.com/what-is-in-php/)
+ [Arrow Functions](https://www.php.net/manual/en/functions.arrow.php)

## Related

+ [Null Safe Object Operator](nullsafe-object-operator.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.html)
+ [Double Arrow](double-arrow.html)
+ [Nullsafe](nullsafe.html)
+ [Object Nullsafe Operator ?->](object-nullsafe-operator.html)
