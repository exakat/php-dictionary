# Disjunctive Normal Form (DNF)
``DNF`` stands for ``Disjunctive Normal Form``. It is a standard form used in propositional logic and Boolean algebra. DNF represents logical expressions as a disjunction ``OR`` of one or more conjunctions ``AND`` of literals. In simpler terms, it is a way to express logical statements using only the logical operators ``OR`` and ``AND``.

The ``DNF`` form allows for the representation of any logical expression using a combination of ``OR`` and ``AND`` operators. It is particularly useful in logic analysis, theorem proving, and boolean circuit design.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dnf-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dnf-type.html","name":"Disjunctive Normal Form (DNF)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"DNF stands for Disjunctive Normal Form","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dnf-type.html"]}],"alternateName":["dnf"],"keywords":["acronym","type","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logical-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/and.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composite-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.declarations.php#language.types.declarations.composite.dnf"},{"@type":"CreativeWork","name":"PHP RFC: Disjunctive Normal Form Types","url":"https:\/\/wiki.php.net\/rfc\/dnf_types"},{"@type":"CreativeWork","name":"Disjunctive normal form","url":"https:\/\/en.wikipedia.org\/wiki\/Disjunctive_normal_form"},{"@type":"CreativeWork","name":"DNF Types in PHP 8.2","url":"https:\/\/lindevs.com\/dnf-types-in-php-8-2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dnf-type"}]}]}</script>
```php
<?php

    class X {
        private (A&B)|(C&D) $y;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.composite.dnf)**
## See Also

+ [PHP RFC: Disjunctive Normal Form Types](https://wiki.php.net/rfc/dnf_types)
+ [Disjunctive normal form](https://en.wikipedia.org/wiki/Disjunctive_normal_form)
+ [DNF Types in PHP 8.2](https://lindevs.com/dnf-types-in-php-8-2)

## Related

+ [Logical Operators](logical-operator.html)
+ [And Operator](and.html)
+ [Type System](type.html)
+ [Composite Type](composite-type.html)
+ [Union Type](union-type.html)
+ [Intersection Type](intersection-type.html)
+ [Relative Types](relative-types.html)
+ [Property Type Declaration](type-declaration-property.html)
