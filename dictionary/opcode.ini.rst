.. _opcode:
.. _bytecode:
.. meta::
	:description:
		Opcode: Opcodes (short for "operation codes") refer to low-level instructions that the PHP interpreter uses to execute PHP scripts.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Opcode
	:twitter:description: Opcode: Opcodes (short for "operation codes") refer to low-level instructions that the PHP interpreter uses to execute PHP scripts
	:twitter:creator: @exakat
	:og:title: Opcode
	:og:type: article
	:og:description: Opcodes (short for "operation codes") refer to low-level instructions that the PHP interpreter uses to execute PHP scripts
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/opcode.ini.html
	:og:locale: en


Opcode
------

Opcodes (short for "operation codes") refer to low-level instructions that the PHP interpreter uses to execute PHP scripts. When PHP processes a code, it goes through several stages of compilation and interpretation. One of these stages involves translating the human-readable PHP source into a series of opcodes, which are then executed by the PHP engine.

Generally speaking, coders never come close to opcodes. The only occasion is when configuring the opcode cache: this cache keeps the generated opcodes in memory, and skips the stages of compilation as long as the source is not changed. 


`Documentation <https://www.php.net/manual/en/book.opcache.php>`__

See also `What is OPcache and How Do You Use It? <https://wp-rocket.me/wordpress-cache/what-is-opcache/>`_
