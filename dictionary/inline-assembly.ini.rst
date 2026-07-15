.. _inline-assembly:
.. meta::
	:description:
		Inline Assembly: Inline assembly is a language feature, found in C, C++, and Rust, that lets raw processor assembly instructions be embedded directly inside otherwise ordinary source code, such as GCC's ``asm(".
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inline Assembly
	:twitter:description: Inline Assembly: Inline assembly is a language feature, found in C, C++, and Rust, that lets raw processor assembly instructions be embedded directly inside otherwise ordinary source code, such as GCC's ``asm("
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inline Assembly
	:og:type: article
	:og:description: Inline assembly is a language feature, found in C, C++, and Rust, that lets raw processor assembly instructions be embedded directly inside otherwise ordinary source code, such as GCC's ``asm("
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inline-assembly.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/inline-assembly.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/inline-assembly.ini.html","name":"Inline Assembly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:02:30 +0000","dateModified":"Wed, 08 Jul 2026 16:02:30 +0000","description":"Inline assembly is a language feature, found in C, C++, and Rust, that lets raw processor assembly instructions be embedded directly inside otherwise ordinary source code, such as GCC's ``asm(\"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Inline Assembly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Inline Assembly
---------------

Inline assembly is a language feature, found in C, C++, and Rust, that lets raw processor assembly instructions be embedded directly inside otherwise ordinary source code, such as GCC's ``asm("...")`` blocks or Rust's ``asm!`` macro. It gives direct control over specific CPU instructions, registers, and hardware features, such as SIMD intrinsics, atomic operations not otherwise exposed by the language, or a device driver's memory-mapped I/O, that the compiler's own code generation does not expose any other way.

Because it bypasses the compiler's usual code generation and type checking for the enclosed instructions, inline assembly is inherently unsafe and non-portable across processor architectures, and is reserved for narrow, performance- or hardware-critical sections.

PHP has no inline assembly, and none is possible: source code is compiled to Zend opcodes and interpreted by the Zend Engine, it is never compiled down to native machine code that a programmer could interleave instructions with. Reaching hardware-level or CPU-instruction-level functionality from PHP requires writing a C extension, or a compiled library invoked through FFI.

`Documentation <https://en.wikipedia.org/wiki/Inline_assembler>`__

Related : :ref:`Foreign Function Interface (FFI) <ffi>`, :ref:`Extensions <extension>`, :ref:`Dynamic Loading <dynamic-loading>`, :ref:`Library <library>`
