# Parameter Removal
Parameter removal is the operation to remove a parameter in a method's signature. 

This may happen in two ways: 

+ Between versions of the code. A method may see one of its parameter being deprecated then removed.
+ In a function relay, where the method doesn't transmit all its incoming parameters to the next.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter-removal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter-removal.html","name":"Parameter Removal","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:27:16 +0000","dateModified":"Fri, 19 Jun 2026 21:27:16 +0000","description":"Parameter removal is the operation to remove a parameter in a method's signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Parameter Removal.html"]}],"keywords":["pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.functions.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parameter-removal"}]}]}</script>
```php
<?php

// get_defined_functions's only paramter was removed in PHP 8.4
$list = get_defined_functions(false); 

class x {
    public function foo($a, $b) {
        // $b is ignored, and set to a fixed value.
        // $b is actually removed for 'public' usage
        $this->goo($a, 2);
    }
    
    private function goo($a, $b = 1) {
        // do Something
    }
}
?>
```

**[Documentation](https://www.php.net/manual/en/language.functions.php)**
## Related

+ [Functions](function.html)
