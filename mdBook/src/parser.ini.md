# Parser
The PHP parser is a piece of software that process a piece of text and extract tokens, with their PHP meanings. The tokens are atomic pieces of information, that are grouped later to build a larger message.

PHP includes an internal parser, that reads the source code, and produces the PHP tokens, the AST and later, the opcodes.
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
+ [tree-sitter-language-pack](https://github.com/kreuzberg-dev/tree-sitter-language-pack)

Related : [Sanitation](Sanitation), [Validation](Validation), [Parse](Parse), [ParseError](ParseError), [Sandbox](Sandbox)
