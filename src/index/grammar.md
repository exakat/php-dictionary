# Grammar
The grammar of a language is the formal set of rules that describes which sequences of tokens form valid statements and expressions. PHP's grammar is defined in a Yacc/Bison file, in ``Zend/zend_language_parser.y`` of the engine source code, that is compiled into the parser used by the Zend Engine.

The grammar operates on tokens produced by the lexer/tokenizer, and is distinct from semantics: a piece of code may be grammatically valid, yet still fail at compile-time or run-time. For example, calling an undefined function.

Ambiguities or changes in the grammar are a common source of backward-incompatible changes between PHP versions, such as the reinterpretation of nested ternary operators or the introduction of new reserved keywords.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/grammar.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/grammar.html","name":"Grammar","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"The grammar of a language is the formal set of rules that describes which sequences of tokens form valid statements and expressions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/grammar.html"]}],"keywords":["source code","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parser.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tokenizer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reserved-name.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Formal_grammar"},{"@type":"CreativeWork","name":"PHP's zend_language_parser.y (source)","url":"https:\/\/github.com\/php\/php-src\/blob\/master\/Zend\/zend_language_parser.y"},{"@type":"CreativeWork","name":"Grammar","url":"https:\/\/phplang.org\/spec\/19-grammar.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"grammar"}]}]}</script>
```php
<?php

    // Grammatically valid, but each statement fails differently
    $a = ; // parse error: grammar violation, no expression after '='
    
    foo(); // grammar is fine, but 'foo' is undefined: a runtime error, not a grammar one

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Formal_grammar)**
## See Also

+ [PHP's zend_language_parser.y (source)](https://github.com/php/php-src/blob/master/Zend/zend_language_parser.y)
+ [Grammar](https://phplang.org/spec/19-grammar.html)

## Related

+ [Parser](parser.html)
+ [Tokenizer](tokenizer.html)
+ [Syntax](syntax.html)
+ [Syntax Error](syntax-error.html)
+ [Reserved Names](reserved-name.html)
