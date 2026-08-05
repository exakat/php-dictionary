# Blind Variable
A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value. This is the case in loops, where the local variable is needed for the processing of each element, but is often a generic name.

Blind variables are defined in the host structure. 

Blind variables are expected to be used only within their structure, although they do exist beyond.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/blind-key.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/blind-key.ini.html","name":"Blind Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:11 +0000","dateModified":"Fri, 19 Jun 2026 21:25:11 +0000","description":"A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Blind Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [foreach()](foreach.ini.html)
+ [For](for.ini.html)
