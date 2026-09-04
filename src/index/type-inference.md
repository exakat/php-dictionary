# Type Inference
Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration.

PHP itself does not infer types for local variables: their type can only be declared on function arguments, return values, properties, and constants. However, static analyzers perform type inference by tracking assignments, control-flow branches, and function signatures to determine what type a value holds at every point in the code.

Type inference enables early detection of type errors even in partially or untyped code. It is the engine behind gradual type checking: the tool fills the gaps left by missing annotations. PHPDoc blocks, ``@var``, ``@param``, ``@return``, are additional hints that guide inference when the code alone is ambiguous.

A classic example is narrowing: after an ``is_string()`` guard, the analyzer infers that the variable is a ``string`` inside the if-branch, removing false-positive warnings.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html","name":"Type Inference","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"]}],"keywords":["type","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-coverage.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependent-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-expression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpdoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autocompletion.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Type_inference"},{"@type":"CreativeWork","name":"Type Inference in PHP using Deep Learning","url":"https:\/\/lup.lub.lu.se\/luur\/download?func=downloadFile&recordOId=9021447&fileOId=9021453"},{"@type":"CreativeWork","name":"Psalm \u2013 Typing in Psalm","url":"https:\/\/psalm.dev\/docs\/annotating_code\/type_syntax\/atomic_types\/"},{"@type":"CreativeWork","name":"Narrowing types for static analysis","url":"https:\/\/seld.be\/notes\/narrowing-types-for-static-analysis\/"},{"@type":"CreativeWork","name":"Type inference for PHP","url":"https:\/\/homepages.cwi.nl\/~jurgenv\/theses\/RuudVanDerWeijde.pdf"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-inference"}]}]}</script>
```php
<?php

    function process(mixed $value): string {
        if (is_string($value)) {
            // type inferred as string here
            return strtoupper($value);
        }
        // type inferred as int|float|bool|array|object|null here
        return (string) $value;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Type_inference)**
## See Also

+ [Type Inference in PHP using Deep Learning](https://lup.lub.lu.se/luur/download?func=downloadFile&recordOId=9021447&fileOId=9021453)
+ [Psalm – Typing in Psalm](https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/)
+ [Narrowing types for static analysis](https://seld.be/notes/narrowing-types-for-static-analysis/)
+ [Type inference for PHP](https://homepages.cwi.nl/~jurgenv/theses/RuudVanDerWeijde.pdf)

## Related

+ [Type System](type.html)
+ [Type Juggling](type-juggling.html)
+ [Type Checking](type-checking.html)
+ [Gradual Type Checking](gradual-type-checking.html)
+ [Type Coverage](type-coverage.html)
+ [Dependent Type](dependent-type.html)
+ [Static Expression](static-expression.html)
+ [Union Type](union-type.html)
+ [Mixed](mixed.html)
+ [PHPdoc](phpdoc.html)
+ [Autocompletion](autocompletion.html)
