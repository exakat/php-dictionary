# Parameter Removal
Parameter removal is the operation to remove a parameter in a method's signature. 

This may happen in two ways: 

+ Between versions of the code. A method may see one of its parameter being deprecated then removed.
+ In a function relay, where the method doesn't transmit all its incoming parameters to the next.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter-removal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter-removal.html","name":"Parameter Removal","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Aug 2026 07:18:05 +0000","dateModified":"Fri, 21 Aug 2026 07:18:05 +0000","description":"Parameter removal is the operation to remove a parameter in a method's signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter-removal.html"]}],"keywords":["pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.functions.php"},{"@type":"CreativeWork","name":"Refactoring function signature maintaining backward compatibility","url":"https:\/\/dev.to\/schirrel\/refactoring-function-signature-maintaining-backward-compatibility-mnp"},{"@type":"CreativeWork","name":".NET API changes that affect compatibility","url":"https:\/\/learn.microsoft.com\/en-us\/dotnet\/core\/compatibility\/library-change-rules"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parameter-removal"}]}]}</script>
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
## See Also

+ [Refactoring function signature maintaining backward compatibility](https://dev.to/schirrel/refactoring-function-signature-maintaining-backward-compatibility-mnp)
+ [.NET API changes that affect compatibility](https://learn.microsoft.com/en-us/dotnet/core/compatibility/library-change-rules)

## Related

+ [Functions](function.html)
