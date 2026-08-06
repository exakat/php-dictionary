# Parse
To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information. 

PHP has a phase of parsing: it is handled by the tokenizer, a part of the PHP engine, that reads the text file with the source code, and outputs the atomic blocks it understood, or a Fatal error. 

Parsing is commonly used when working with data formats like XML, JSON, HTML, YAML, or even custom text formats. It involves breaking down a string into its individual components or tokens to understand its underlying structure.

The simplest usage of parsing is to identify errors in the structure, leading to an early aborting of the processing.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parse.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/parse.html","name":"Parse","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Parse.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Sanitation](sanitation.ini.html)
+ [Validation](validation.ini.html)
+ [parse\_str()](parse_str.ini.html)
+ [ParseError](parseerror.ini.html)
+ [Parser](parser.ini.html)
+ [Phptoken](phptoken.ini.html)
+ [Lint, Won't Execute](lint-wont-execute.ini.html)
+ [parse\_url()](parse_url.ini.html)
