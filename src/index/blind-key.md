# Blind Variable
A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value. This is the case in loops, where the local variable is needed for the processing of each element, but is often a generic name.

Blind variables are defined in the host structure. 

Blind variables are expected to be used only within their structure, although they do exist beyond.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blind-key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blind-key.html","name":"Blind Variable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blind-key.html"]}],"alternateName":["blind-variable"],"keywords":["concept","variable","foreach","for"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/for.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Loop_variable"},{"@type":"CreativeWork","name":"When writing a 'for' loop, why does everyone name the variable as 'i'?","url":"https:\/\/www.quora.com\/When-writing-a-for-loop-why-does-everyone-name-the-variable-as-i"},{"@type":"CreativeWork","name":"Stop the i, j, k Confusion: A Clearer Approach to Loop Index Naming","url":"https:\/\/dev.to\/mogera551\/stop-the-i-j-k-confusion-a-clearer-approach-to-loop-index-naming-2g4e"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"blind-key"}]}]}</script>
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
## See Also

+ [When writing a 'for' loop, why does everyone name the variable as 'i'?](https://www.quora.com/When-writing-a-for-loop-why-does-everyone-name-the-variable-as-i)
+ [Stop the i, j, k Confusion: A Clearer Approach to Loop Index Naming](https://dev.to/mogera551/stop-the-i-j-k-confusion-a-clearer-approach-to-loop-index-naming-2g4e)

## Related

+ [foreach()](foreach.html)
+ [For](for.html)
