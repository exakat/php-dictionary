# Linting
Linting is the process to turn the Text file that holds the source code, into tokens. During this first phase, PHP applies some checks, and report anything that makes no sense.

After linting, the code is processed further before reaching the status of opcode, where it can be executed. 

Linting is an option of the PHP CLI: ``-l``. 

Linting is sometimes mistaken with ``compile``: linting is a part of a compilation. Since, PHP has this only step between the code and the execution, with ``eval()`` or the PHP CLI, linting is often considered as compiling. Reality is more complex.
## See Also

+ [PHP linting for PHP version compatibility](https://docs.wpvip.com/wordpress-on-vip/php/versions/php-linting-scans/)
+ [PHP 8.3: PHP CLI Lint (php -l) supports linting multiple files at once](https://php.watch/versions/8.3/cli-lint-multiple-files)

Related : [Compile](Compile), [Analysis](Analysis), [Bug](Bug), [Enumeration Case](Enumeration Case), [Tool](Tool), [PHP Editor](PHP Editor)
