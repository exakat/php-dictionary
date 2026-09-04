# Dangling Reference
In a foreach loop, a variable is used for looping through the array. When this variable is configured as a reference, the reference survives after the end of the loop. When this variable is reused later, it applies to the last element of the array and overwrites its value.

This doesn't happen when the second loop doesn't use a reference. 

It is recommended to unset the referenced variable, after the loop. It destroys the reference, not the value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dangling-reference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dangling-reference.html","name":"Dangling Reference","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"In a foreach loop, a variable is used for looping through the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dangling-reference.html"]}],"keywords":["classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php"},{"@type":"CreativeWork","name":"No Dangling References","url":"https:\/\/github.com\/dseguy\/clearPHP\/blob\/master\/rules\/no-dangling-reference.md"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dangling-reference"}]}]}</script>
```php
<?php

    $array = ['a', 'b', 'c'];
    
    foreach($array as &$x) { 
        // doSomething() or even do nothing! 
    }
    
    // second loop, no reference
    foreach($array as $x) { 
        // doSomething() or even do nothing! 
    }
    
    var_dump($array);
    $array = ['a', 'b', 'b'];

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [No Dangling References](https://github.com/dseguy/clearPHP/blob/master/rules/no-dangling-reference.md)

## Related

+ [Loops](loop.html)
+ [References](reference.html)
