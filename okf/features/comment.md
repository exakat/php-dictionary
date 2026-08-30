---
type: "PHP Feature"
title: "Comments"
description: "PHP comments are used to add explanatory notes or annotations within the code."
resource: "https://www.php.net/manual/en/language.basic-syntax.comments.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Comments

PHP comments are used to add explanatory notes or annotations within the code. Comments are not executed by the PHP interpreter; they are purely for documentation purposes, and they help the readers understand the code better. PHP supports two main types of comments:

Single-line comments: these are comments that span only one line. They are typically used for brief explanations or annotations within the code. Single-line comments can be created using either double slashes ``//`` or a hash symbol ``#``.

Multi-line comments: these are comments that can span multiple lines, allowing for more extensive explanations or commenting out large sections of code. Multi-line comments are enclosed within ``/*`` and ``*/``.

It's important to note that comments do not affect the execution of the PHP code; they are ignored by the PHP interpreter: in fact, they are omitted at parsing time, before execution. Comments are primarily for developers and maintainers of the code to understand its purpose, logic, or any special considerations. Well-documented code with meaningful comments can make it easier to read, understand, and maintain applications.

Comments may be formalized with a specific syntax, and create automated instruction for other application. For example, phpdoc comments are providing extra information with a specific syntax.

As a side feature, comments may also be started with the Unicode #️⃣️ character.

```php
<?php

// This is a single-line comment
$variable = 42; // Assign a value to $variable
# Another single-line comment

    /*
    This is a multi-line comment.
    It can span multiple lines and is often used for
    longer explanations or for commenting out sections of code.
    */

    $variable = 43; 
    
    #️⃣️ One line comment

?>
```

## Documentation
- [https://www.php.net/manual/en/language.basic-syntax.comments.php](https://www.php.net/manual/en/language.basic-syntax.comments.php)

## See Also
- [PHP Comments](https://flatcoding.com/tutorials/php-programming/php-comments/)
- [PHP Comment](https://www.phptutorial.net/php-tutorial/php-comments/)

## Related
- [PHPdoc](/features/phpdoc.md)
- [Documentation](/features/documentation.md)
- [Pound #](/features/pound.md)
- [Explanation](/features/explanation.md)
- [Hash #](/features/hash-character.md)
- [Star *](/features/star.md)
- [TODO](/features/todo.md)
- [Markdown](/features/markdown.md)

