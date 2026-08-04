# Static Single Assignment Form (SSA)
``SSA`` stands for Static Single Assignment form. It is a property of code where each variable is assigned exactly once, making it easier to analyze and optimize.

SSA is used in the PHP engine, and it helps with several aspects of the execution engine: 

+ Performance: ``SSA`` enables more efficient code optimization, such as dead code elimination, constant propagation, and loop optimizations.
+ JIT Compilation: the PHP JIT compiler, introduced in version 8.0, benefits from SSA to generate faster machine code.

## See Also

+ [Building SSA in a Compiler for PHP](https://link.springer.com/chapter/10.1007/978-3-030-80515-9_24)

Related : [Just In Time (JIT)](Just In Time (JIT)), [Performance](Performance), [Static Code Analysis (SCA)](Static Code Analysis (SCA)), [Control Flow Graph (CFG)](Control Flow Graph (CFG))
