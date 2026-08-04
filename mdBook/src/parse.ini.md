# Parse
To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information. 

PHP has a phase of parsing: it is handled by the tokenizer, a part of the PHP engine, that reads the text file with the source code, and outputs the atomic blocks it understood, or a Fatal error. 

Parsing is commonly used when working with data formats like XML, JSON, HTML, YAML, or even custom text formats. It involves breaking down a string into its individual components or tokens to understand its underlying structure.

The simplest usage of parsing is to identify errors in the structure, leading to an early aborting of the processing.
```php
<?php

if (!json_validate($json)) {
    throw new Exception('invalid JSON data');
}

$object = json_decode($json);

?>
```

## See Also

+ [Parse, don’t validate](https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/)

Related : [Sanitation](Sanitation), [Validation](Validation), [parse_str()](parse_str()), [ParseError](ParseError), [Parser](Parser), [Phptoken](Phptoken), [Lint, Won't Execute](Lint, Won't Execute), [parse_url()](parse_url())
