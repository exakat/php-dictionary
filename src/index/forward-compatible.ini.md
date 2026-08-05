# Forward Compatible
A forward compatible feature is a feature that will be available in future versions. In particular, it might be couple with a forward incompatible feature, which will be dropped, while the forward compatible feature will stay. 

For example, PHP allows the increment of non-numeric strings. This feature might be deprecated, and could be removed in a future version, not defined at the time of writing. The functions ``str_increment()`` and ``str_decrement()`` were introduced in version 8.3. They can replace the current feature, and they will be available in the future versions, making them forward compatible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/forward-compatible.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/forward-compatible.ini.html","name":"Forward Compatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:27:25 +0000","dateModified":"Mon, 20 Jul 2026 08:27:25 +0000","description":"A forward compatible feature is a feature that will be available in future versions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Forward Compatible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 't';
    echo ++$a; //u
    
    $a = str_increment($a);
    echo $a; // v

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Forward_compatibility)**
## Related

+ [Backward Compatible](backward-compatible.ini.html)
+ [Backward Incompatible](backward-incompatible.ini.html)
+ [Deprecated](deprecated.ini.html)
+ [Upgrade](upgrade.ini.html)
+ [Version](version.ini.html)
+ [delayedtargetvalidation](delayedtargetvalidation.ini.html)
