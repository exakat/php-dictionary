# Guard Rail
A guard rail is a constraint, check, or automated safeguard built into a system to keep it within safe boundaries, without necessarily stopping it outright the way a hard failure would.

The term comes from road safety, where a physical rail prevents a vehicle from leaving the road entirely, while still allowing some margin for error. Applied to software, guard rails include type declarations, assertions, validation rules, and static analysis checks, which catch invalid states early rather than letting them propagate into production.

Guard rails differ from design by contract in scope: a contract formalises the obligations of a single function or class, while guard rails are broader, project-wide conventions, often enforced automatically by tooling such as linters, static analysers, or continuous integration pipelines.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/guard-rail.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/guard-rail.html","name":"Guard Rail","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Sep 2026 19:22:54 +0000","dateModified":"Mon, 21 Sep 2026 19:22:54 +0000","description":"A guard rail is a constraint, check, or automated safeguard built into a system to keep it within safe boundaries, without necessarily stopping it outright the way a hard failure would","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/guard-rail.html"]}],"alternateName":["guardrail","guardrails"],"keywords":["concept","_noDocumentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defensive-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/contract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circuit-breaker.html"}],"citation":[{"@type":"CreativeWork","name":"What Is a Guardrail? - Xygeni","url":"https:\/\/xygeni.io\/sscs-glossary\/what-is-a-guardrail\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"guard-rail"}]}]}</script>
```php
<?php

    declare(strict_types = 1);

    function setAge(int $age): void {
        // Guard rail: reject an invalid state before it propagates.
        if ($age < 0 || $age > 150) {
            throw new InvalidArgumentException('Age out of range');
        }

        // ... proceed with a value guaranteed to be sane
    }

?>
```

## See Also

+ [What Is a Guardrail? - Xygeni](https://xygeni.io/sscs-glossary/what-is-a-guardrail/)

## Related

+ [Defensive Programming](defensive-programming.html)
+ [Assertions](assertion.html)
+ [Validation](validation.html)
+ [Design By Contract (DBC)](contract.html)
+ [Type System](type.html)
+ [Circuit Breaker](circuit-breaker.html)
