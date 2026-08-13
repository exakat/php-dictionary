# Hard Coded
Hard coded data in code happens when a value is set as a literal in the code, and can't be changed through any directives or parameters.

Hard-code becomes a security problem, when the hard-coded value is a password or a hash of it. This secret is now readable in the code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hard-coded.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hard-coded.html","name":"Hard Coded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:58:56 +0000","dateModified":"Tue, 11 Aug 2026 20:58:56 +0000","description":"Hard coded data in code happens when a value is set as a literal in the code, and can't be changed through any directives or parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Hard Coded.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hard-coded"}]}]}</script>
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

+ [Constants](constant.html)
+ [Magic Numbers](magic-number.html)
+ [Security](security.html)
+ [Password](password.html)
+ [Configuration](configuration.html)
