# Appeasement Pattern
The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue.

Common PHP manifestations include: using the ``@`` error suppression operator to hide failures, loosening type checks to accept any input, adding special-case exceptions to a validator for a specific caller, or gradually degrading a strict check into a permissive one to avoid breakage.

The appeasement pattern also happens with static analysis: the tool may not support a particular syntax, lack helpful context or the code may simply be ambiguous. Appeasement pattern leads to more verbose or convoluted code, so as to allow extra configuration. 

The appeasement pattern leads to fragile code where hidden failures accumulate silently, security assumptions erode, and bugs become much harder to diagnose. The correct approach is to fix the root cause rather than appease the symptom.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/appeasement-pattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/appeasement-pattern.html","name":"Appeasement Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"The appeasement pattern is a code smell where validation, error checking, or security controls are weakened or bypassed to satisfy code quality tools, a demanding caller or to silence errors, instead of fixing the underlying issue","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Appeasement Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Error Suppression](error-suppression.ini.html)
+ [Security](security.ini.html)
+ [Code Smell](code-smell.ini.html)
+ [Implicit](implicit.ini.html)
+ [Hidden State](hidden-state.ini.html)
+ [Vulnerability](vulnerability.ini.html)
+ [Distributed State](distributed-state.ini.html)
