---
type: "concept"
title: "Linting"
description: "Linting is the process to turn the text file that holds the source code into tokens."
resource: "https://en.wikipedia.org/wiki/Lint_(software)"
tags: ["concept", "source code", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Linting

Linting is the process to turn the text file that holds the source code into tokens. During this first phase, PHP applies some checks, and report anything that makes no sense.

After linting, the code is processed further before reaching the status of opcode, where it can be executed. 

Linting is an option of the PHP CLI: ``-l``. 

Linting is sometimes mistaken with ``compile``: linting is a part of a compilation. Since PHP has only this one step between the code and its execution, with ``eval()`` or the PHP CLI, linting is often considered as compiling. Reality is more complex.

## Documentation
- [https://en.wikipedia.org/wiki/Lint_(software)](https://en.wikipedia.org/wiki/Lint_(software))

## See Also
- [PHP linting for PHP version compatibility](https://docs.wpvip.com/wordpress-on-vip/php/versions/php-linting-scans/)
- [PHP 8.3: PHP CLI Lint (php -l) supports linting multiple files at once](https://php.watch/versions/8.3/cli-lint-multiple-files)

## Related
- [Compile](/features/compile.md)
- [Analysis](/features/analysis.md)
- [Bug](/features/bug.md)
- [Enumeration Case](/features/enum-case.md)
- [Tool](/features/tool.md)
- [PHP Editor](/features/php-editor.md)
- [Git Hook](/features/git-hook.md)
- [PHPStan](/features/phpstan.md)
- [Rector](/features/rector.md)
- [Static Code Analysis (SCA)](/features/sca.md)
- [Tokenizer](/features/tokenizer.md)

## Details
- Packagist: [php-parallel-lint/php-code-style](https://packagist.org/packages/php-parallel-lint/php-code-style)

