# Method Overloading
Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters.

Method overloading is a PHP feature, based on the usage of the ``func_get_args()`` native function. It differs from other language's implementation as there is only one method definition, but multiple execution paths. Method overloading usually requires other features, such as typing or default values, to be handled manually.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-overloading.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-overloading.html","name":"Method Overloading","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Method Overloading.html"]}],"keywords":["class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/func_get_args.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.overloading.php"},{"@type":"CreativeWork","name":"How Method Overloading Works in PHP","url":"https:\/\/www.freecodecamp.org\/news\/method-overloading-in-php\/"},{"@type":"CreativeWork","name":"PHP method overloading","url":"https:\/\/dev.to\/xwero\/php-method-overloading-5epg"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"method-overloading"}]}]}</script>
```php
<?php

//
class X {
    // $a and $b could be typed array|int
    // returntype could be array|int 
    // yet, it may end up being confusing
    function substract($a, $b) {
        if (is_int($a)) {
            return $a - (int) $b; 
        }
        
        if (is_array($a)) {
            return array_diff($a, (array) $b);
        }
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.overloading.php)**
## See Also

+ [How Method Overloading Works in PHP](https://www.freecodecamp.org/news/method-overloading-in-php/)
+ [PHP method overloading](https://dev.to/xwero/php-method-overloading-5epg)

## Related

+ [func\_get\_args()](func_get_args.html)
