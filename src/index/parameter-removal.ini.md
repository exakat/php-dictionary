# Parameter Removal
Parameter removal is the operation to remove a parameter in a method's signature. 

This may happen in two ways: 

+ Between versions of the code. A method may see one of its parameter being deprecated then removed.
+ In a function relay, where the method doesn't transmit all its incoming parameters to the next.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parameter-removal.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parameter-removal.ini.html","name":"Parameter Removal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:27:16 +0000","dateModified":"Fri, 19 Jun 2026 21:27:16 +0000","description":"Parameter removal is the operation to remove a parameter in a method's signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Parameter Removal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Functions](function.ini.html)
