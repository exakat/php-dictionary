.. _linting:
.. _lint:

Linting
-------

Linting is the process to turn the Text file that holds the source code, into tokens. During this first phase, PHP applies some checks, and report anything that makes no sense.

After linting, the code is processed further before reaching the status of opcode, where it can be executed. 

Linting is an option of the PHP CLI : `-l`. 

Linting is sometimes mistaken with 'compiling' : linting is a part of a compilation. Since, it is the only step available in PHP between the code and the execution (with eval() or the PHP CLI), linting is often considered as compiling. 


