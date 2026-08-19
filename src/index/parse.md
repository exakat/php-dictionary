# Parse
To parse, or parsing, refers to the process of analyzing and interpreting the structure of data to extract meaningful information.

PHP has a phase of parsing: it is handled by the tokenizer, a part of the PHP engine, that reads the text file with the source code, and outputs the atomic blocks it understood, or a Fatal error. 

Parsing is commonly used when working with data formats like XML, JSON, HTML, YAML, or even custom text formats. It involves breaking down a string into its individual components or tokens to understand its underlying structure.

The simplest usage of parsing is to identify errors in the structure, leading to an early aborting of the processing.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse.html","name":"Parse","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:50:09 +0000","dateModified":"Wed, 19 Aug 2026 06:50:09 +0000","description":"To parse, or parsing, refers to the process of analyzing and interpreting the structure of data to extract meaningful information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Parse.html"]}],"alternateName":["parsing"],"keywords":["php","languages"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sanitation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_str.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parseerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parser.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phptoken.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint-wont-execute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parse_url.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Parsing"},{"@type":"CreativeWork","name":"Parse, don\u2019t validate","url":"https:\/\/lexi-lambda.github.io\/blog\/2019\/11\/05\/parse-don-t-validate\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"parse"}]}]}</script>
```php
<?php

if (!json_validate($json)) {
    throw new Exception('invalid JSON data');
}

$object = json_decode($json);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Parsing)**
## See Also

+ [Parse, don’t validate](https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/)

## Related

+ [Sanitation](sanitation.html)
+ [Validation](validation.html)
+ [parse\_str()](parse_str.html)
+ [ParseError](parseerror.html)
+ [Parser](parser.html)
+ [Phptoken](phptoken.html)
+ [Lint, Won't Execute](lint-wont-execute.html)
+ [parse\_url()](parse_url.html)
