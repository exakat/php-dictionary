# Hard Coded
Hard coded data in code happens when a value is set as a literal in the code, and can't be change through any directives or parameters.

Hard-code becomes a security problem, when the hard-coded value is a password or a hash of it. This secret is now readable in the code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hard-coded.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hard-coded.html","name":"Hard Coded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:32 +0000","dateModified":"Thu, 06 Aug 2026 05:50:32 +0000","description":"Hard coded data in code happens when a value is set as a literal in the code, and can't be change through any directives or parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Hard Coded.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php 

// This is hard-coded
$a = 1;

// $b has a default value, but may also be changed at execution time
function foo($b = 2) {
    echo $b;
}

 ?>
```

**[Documentation](https://en.wikipedia.org/wiki/Hard_coding)**
## See Also

+ [CWE-798: Use of Hard-coded Credentials](https://cwe.mitre.org/data/definitions/798.html)

## Related

+ [Constants](constant.ini.html)
+ [Magic Numbers](magic-number.ini.html)
+ [Security](security.ini.html)
+ [Password](password.ini.html)
+ [Configuration](configuration.ini.html)
