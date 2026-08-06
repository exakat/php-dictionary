# Disjunctive Normal Form (DNF)
``DNF`` stands for ``Disjunctive Normal Form``. It is a standard form used in propositional logic and Boolean algebra. DNF represents logical expressions as a disjunction ``OR`` of one or more conjunctions ``AND`` of literals. In simpler terms, it is a way to express logical statements using only the logical operators ``OR`` and ``AND``.

The ``DNF`` form allows for the representation of any logical expression using a combination of ``OR`` and ``AND`` operators. It is particularly useful in logic analysis, theorem proving, and boolean circuit design.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dnf-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dnf-type.html","name":"Disjunctive Normal Form (DNF)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 09:41:50 +0000","dateModified":"Sun, 21 Jun 2026 09:41:50 +0000","description":"``DNF`` stands for ``Disjunctive Normal Form``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Disjunctive Normal Form (DNF).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Logical Operators](or.ini.html)
+ [And Operator](and.ini.html)
+ [Type System](type.ini.html)
+ [Composite Type](composite-type.ini.html)
+ [Union Type](union-type.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
