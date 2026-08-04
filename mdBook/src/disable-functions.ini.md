# Disable Functions
The ``disable_functions`` PHP directive prevents specific native functions from being executed when called from code. It helps mitigate potential security vulnerabilities or enforce practices by forbidding usage of specific functions, even when they are compiled into the engine.

This directive requires a list of PHP functions, separated by a comma, and set in the PHP.ini file: this is read at startup time and cannot be changed later. 

``disable_functions`` only works on native functions, and extension functions. It is not possible to preemptively disable a custom function: this may be achieved by defining the forbidden function, and assigning it a warning, or no operation. 

A disabled function may be recreated as a custom function in the code.

Disabled functions appear as undefined: in fact, they can also be redefined, with a custom code and then used.
## See Also

+ [Disabling functions using the PHP disable_functions directive](https://kb.hosting.com/docs/php-disable_functions-directive)

Related : [Functions](Functions), [Preappend File Directive](Preappend File Directive), [Disable](Disable), [Enable](Enable), [Disable Classes](Disable Classes)
