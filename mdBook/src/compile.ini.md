# Compile
To compile, or compilation, is the process to turn the source code into machine code for direct execution. 

Generally speaking, PHP is interpreted, so its code is directly run by the PHP engine. It is initially linted, for syntax correctedness, then converted into opcodes, which are run by the engine.

Some tools convert PHP directly a binary, such as kphp. 

There are tools to convert PHP into a binary file, such as static-php-cli or roadrunner. These solutions merge the PHP engine with the target code. 

Other tools transpile PHP code to another language, such as Rust or .NET, and then, compile it to a binary file. These are not common approaches.
## See Also

+ [kphp](https://vkcom.github.io/kphp/)
+ [static-php-cli](https://github.com/crazywhalecc/static-php-cli)
+ [RoadRunner](https://roadrunner.dev/)

Related : [Linting](Linting), [Interpreted](Interpreted), [Ahead Of Time](Ahead Of Time), [__halt_compiler()](__halt_compiler()), [Just In Time (JIT)](Just In Time (JIT)), [Transpile](Transpile), [Virtual Machine (VM)](Virtual Machine (VM)), [Artifact](Artifact), [Monomorphization](Monomorphization), [Order Of Execution](Order Of Execution)
