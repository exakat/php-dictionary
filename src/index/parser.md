# Parser
The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings. The tokens are atomic pieces of information, that are grouped later to build a larger message.

PHP includes an internal parser, that reads the source code, and produces the PHP tokens, the AST and later, the opcodes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parser.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parser.html","name":"Parser","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Parser.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Sanitation](sanitation.ini.html)
+ [Validation](validation.ini.html)
+ [Parse](parse.ini.html)
+ [ParseError](parseerror.ini.html)
+ [Sandbox](sandbox.ini.html)

## Related packages

+ [nikic/PHP-Parser](https://packagist.org/packages/nikic/PHP-Parser)
+ [parsica-php/parsica](https://packagist.org/packages/parsica-php/parsica)
