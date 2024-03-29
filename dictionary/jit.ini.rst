.. _jit:

Just In Time
------------

Just-In-Time compilation is a technique used in computer science and programming languages to improve the runtime performance of code execution.

In traditional interpretation of programming languages like PHP, code is executed line by line by an interpreter. This can lead to some performance bottlenecks, especially for code that is executed frequently or for applications that require high throughput.

With Just-In-Time compilation, the code is not interpreted line by line. Instead, it's analyzed and compiled into machine code just before it's executed. This compiled code is then stored in memory and can be executed much more efficiently than interpreted code. This approach can significantly improve the performance of a programming language.

`Documentation <https://php.watch/versions/8.0/JIT>`__

See also `PHP 8.0: JIT <https://php.watch/versions/8.0/JIT>`_, `Exploring the New PHP JIT Compiler <https://www.zend.com/blog/exploring-new-php-jit-compiler>`_

Added in PHP 8.0+
