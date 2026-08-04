# Inline Assembly
Inline assembly is a language feature, found in C, C++, and Rust, that lets raw processor assembly instructions be embedded directly inside otherwise ordinary source code, such as GCC's ``asm("...")`` blocks or Rust's ``asm!`` macro. It gives direct control over specific CPU instructions, registers, and hardware features, such as SIMD intrinsics, atomic operations not otherwise exposed by the language, or a device driver's memory-mapped I/O, that the compiler's own code generation does not expose any other way.

Because it bypasses the compiler's usual code generation and type checking for the enclosed instructions, inline assembly is inherently unsafe and non-portable across processor architectures, and is reserved for narrow, performance- or hardware-critical sections.

PHP has no inline assembly, and none is possible: source code is compiled to Zend opcodes and interpreted by the Zend Engine, it is never compiled down to native machine code that a programmer could interleave instructions with. Reaching hardware-level or CPU-instruction-level functionality from PHP requires writing a C extension, or a compiled library invoked through FFI.
Related : [Foreign Function Interface (FFI)](Foreign Function Interface (FFI)), [Extensions](Extensions), [Dynamic Loading](Dynamic Loading), [Library](Library)
