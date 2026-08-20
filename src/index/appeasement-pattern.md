# Appeasement Pattern
The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue.

Common PHP manifestations include: using the ``@`` error suppression operator to hide failures, loosening type checks to accept any input, adding special-case exceptions to a validator for a specific caller, or gradually degrading a strict check into a permissive one to avoid breakage.

The appeasement pattern also happens with static analysis: the tool may not support a particular syntax, lack helpful context or the code may simply be ambiguous. The appeasement pattern leads to more verbose or convoluted code, so as to allow extra configuration.

The appeasement pattern leads to fragile code where hidden failures accumulate silently, security assumptions erode, and bugs become much harder to diagnose. The correct approach is to fix the root cause rather than appease the symptom.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/appeasement-pattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/appeasement-pattern.html","name":"Appeasement Pattern","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:25:46 +0000","dateModified":"Wed, 19 Aug 2026 08:25:46 +0000","description":"The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Appeasement Pattern.html"]}],"alternateName":["appeasement"],"keywords":["concept","security","code smell","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-suppression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-smell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implicit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hidden-state.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-state.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Code_smell"},{"@type":"CreativeWork","name":"Error suppression operator","url":"https:\/\/www.php.net\/manual\/en\/language.operators.errorcontrol.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"appeasement-pattern"}]}]}</script>
```php
<?php

    // Appeasement: silencing an error instead of fixing it
    $result = @file_get_contents($untrustedPath); // failure is hidden
    
    // Appeasement: loosening a type check to stop a caller from failing
    function process(mixed $value): void {
        // was: if (!is_int($value)) { throw new \InvalidArgumentException(); }
        // now silently coerces because one caller passes strings
        $value = (int) $value;
    }
    
    // SCA Appeasement: 
    // $url has already been checked for being a valid URL so this will always works
    /** @var array{0: string, 1: string} $r */
    preg_match(#(http)s?://#, $url, $r);
    echo $r[0];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Code_smell)**
## See Also

+ [Error suppression operator](https://www.php.net/manual/en/language.operators.errorcontrol.php)

## Related

+ [Error Suppression](error-suppression.html)
+ [Security](security.html)
+ [Code Smell](code-smell.html)
+ [Implicit](implicit.html)
+ [Hidden State](hidden-state.html)
+ [Vulnerability](vulnerability.html)
+ [Distributed State](distributed-state.html)
