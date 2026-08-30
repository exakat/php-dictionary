# Case Sensitivity
Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive.

The case insensitive named structures are: 

+ Classes
+ Enumerations
+ Functions
+ Interfaces
+ Magic methods
+ Magic constants
+ Named parameters
+ Methods
+ Namespaces
+ PHP keywords
+ Traits

The case sensitive named structures are: 

+ Class constants
+ Global constants, since PHP 8.0
+ Array index
+ Properties
+ Variables

Case sensitivity has the potential to speed up PHP execution: the gain is a micro-optimisation, that requires millions of calls before yielding significant speed up. 

The different case sensitivities in the language is balanced by the common practice to use the original case when using a structure.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case-sensitivity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case-sensitivity.html","name":"Case Sensitivity","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case-sensitivity.html"]}],"alternateName":["case-insensitive"],"keywords":["case","concept","portability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Case_sensitivity"},{"@type":"CreativeWork","name":"Unraveling the Quest for the Fastest Case Insensitive Char Comparison in PHP","url":"https:\/\/www.exakat.io\/unraveling-the-quest-for-the-fastest-case-insensitive-char-comparison-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"case-sensitivity"}]}]}</script>
```php
<?php

    // two distinct variables
    $x = 1;
    $X = 2;
    
    // two identical calls
    foo();
    FOO();
    
    // Calling a class with its definition case
    $db = new SQLite3(); 
    // This is valid, and often reported by tools and conventions
    $db = new SQLite3(); 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Case_sensitivity)**
## See Also

+ [Unraveling the Quest for the Fastest Case Insensitive Char Comparison in PHP](https://www.exakat.io/unraveling-the-quest-for-the-fastest-case-insensitive-char-comparison-in-php/)

## Related

+ [Name](name.html)
+ [String](string.html)
+ [Name Conventions](name-convention.html)
