# Pseudo-variable
A pseudo-variable is a term used to describe a variable that looks like a variable but does not represent one. Instead, it is a special case that has a specific meaning within its context. ``$this`` is the only pseudo-variable: it represents the object that is called.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-variable.html","name":"Pseudo-variable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:27 +0000","dateModified":"Tue, 18 Aug 2026 05:24:27 +0000","description":"A pseudo-variable is a term used to describe a variable that looks like a variable but does not represent one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-variable.html"]}],"keywords":["variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php"},{"@type":"CreativeWork","name":"Understanding of self and this in PHP","url":"https:\/\/medium.com\/@programmingdive\/understanding-of-self-and-this-in-php-a310aaf509b1"},{"@type":"CreativeWork","name":"When to Use self and $this in PHP","url":"https:\/\/www.w3docs.com\/snippets\/php\/when-to-use-self-and-this-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pseudo-variable"}]}]}</script>
```php
<?php

    class X {
        private string $name;
        
        function __construct($name) {
            $this->name = $name;
        }
        
        function foo() {
            // $this represents any object of type x
            print $this->name;
        }
    }
    
    // $a represents only the object 'a', type x, until it is reassigned
    $a = new x('a');
    
    // $b represents only the object 'b', type x, until it is reassigned
    $b = new x('b');

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## See Also

+ [Understanding of self and this in PHP](https://medium.com/@programmingdive/understanding-of-self-and-this-in-php-a310aaf509b1)
+ [When to Use self and $this in PHP](https://www.w3docs.com/snippets/php/when-to-use-self-and-this-in-php)

## Related

+ [Variables](variable.html)
