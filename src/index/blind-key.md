# Blind Variable
A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value. This is the case in loops, where the local variable is needed for the processing of each element, but is often a generic name.

Blind variables are defined in the host structure. 

Blind variables are expected to be used only within their structure, although they do exist beyond.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blind-key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blind-key.html","name":"Blind Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:11 +0000","dateModified":"Fri, 19 Jun 2026 21:25:11 +0000","description":"A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Blind Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Blind Variable"}]}]}</script>
```php
<?php

    // $key and $value are blind variables
    foreach(source() as $key => $value) {
        doSomething($key, $value);
    }
    
    
    // standard loop syntax
    for($i = 0; $i < 10; ++$i) {
        doSomething($i);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Loop_variable)**
## Related

+ [foreach()](foreach.html)
+ [For](for.html)
