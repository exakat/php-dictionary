# Parser
The PHP parser is a piece of software that processes a piece of text and extracts tokens, with their PHP meanings. The tokens are atomic pieces of information, that are grouped later to build a larger message.

PHP includes an internal parser, that reads the source code, and produces the PHP tokens, the AST and later, the opcodes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parser.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parser.html","name":"Parser","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 04:51:43 +0000","dateModified":"Thu, 27 Aug 2026 04:51:43 +0000","description":"The PHP parser is a piece of software that processes a piece of text and extracts tokens, with their PHP meanings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parser.html"]}],"alternateName":["php-parser"],"keywords":["internals"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sanitation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parseerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sandbox.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/antlr4.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/grammar.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multi-pass-algorithm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tokenizer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Parsing#Parser"},{"@type":"CreativeWork","name":"Parse, don\u2019t validate","url":"https:\/\/lexi-lambda.github.io\/blog\/2019\/11\/05\/parse-don-t-validate\/"},{"@type":"CreativeWork","name":"tree-sitter-language-pack","url":"https:\/\/github.com\/kreuzberg-dev\/tree-sitter-language-pack"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parser"}]}]}</script>
```php
<?php

    if (!json_validate($json)) {
        throw new Exception('invalid JSON data');
    }
    
    $object = json_decode($json);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Parsing#Parser)**
## See Also

+ [Parse, don’t validate](https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/)
+ [tree-sitter-language-pack](https://github.com/kreuzberg-dev/tree-sitter-language-pack)

## Related

+ [Sanitation](sanitation.html)
+ [Validation](validation.html)
+ [Parse](parse.html)
+ [ParseError](parseerror.html)
+ [Sandbox](sandbox.html)
+ [ANTLR4](antlr4.html)
+ [Grammar](grammar.html)
+ [Multi-pass Algorithm](multi-pass-algorithm.html)
+ [Tokenizer](tokenizer.html)

## Related packages

+ [nikic/PHP-Parser](https://packagist.org/packages/nikic/PHP-Parser)
+ [parsica-php/parsica](https://packagist.org/packages/parsica-php/parsica)
