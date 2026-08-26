# Double Check
A double check happens when the same characteristics is checked twice. 

Double check evolve naturally from code that does not take into account the entire system it is residing in.

Double check may be explicit, or implicit. The explicit are plainly written in the code, while implicit double check requires context knowledge. 

Double checks are a feature of defensive programming, where everything is checked as needed, to ensure that a previous omission does not go unchecked, even at the cost of effort duplication.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-check.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-check.html","name":"Double Check","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"A double check happens when the same characteristics is checked twice","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-check.html"]}],"keywords":["concept","practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defensive-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/useless.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Defensive_programming"},{"@type":"CreativeWork","name":"Double-checked locking","url":"https:\/\/en.wikipedia.org\/wiki\/Double-checked_locking"},{"@type":"CreativeWork","name":"OWASP: Input Validation Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Input_Validation_Cheat_Sheet.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"double-check"}]}]}</script>
```php
<?php

// This condition is a double check with the one inside the function foo()
// This doublecheck uses 2 identical conditions, with different syntax
if ($j >= 0) {
    foo($j);
}

function foo(int $i): ?int {
    if ($i < 0) {
        return null;
    }
    
    return $i + 1;
}

// Foreach() checks for $items to be empty, and skips itself in that case.
// the empty() check is duplicate
if (!empty($items)) {
    foreach ($items as $item) {
        doSomething();
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Defensive_programming)**
## See Also

+ [Double-checked locking](https://en.wikipedia.org/wiki/Double-checked_locking)
+ [OWASP: Input Validation Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Input_Validation_Cheat_Sheet.html)

## Related

+ [Defensive Programming](defensive-programming.html)
+ [Useless](useless.html)
