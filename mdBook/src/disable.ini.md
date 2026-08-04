# Disable
To disable is to prevent a feature to perform. For example, using ``disable_functions=foo`` prevents the function ``foo`` to be available at the start of execution, even if PHP has a definition for it. The function ``foo`` is cannot be run anymore, unless defined again.

Another example is ``memory_limit=-1``, which sets the maximum memory used by a PHP application to ``-1``, effectively disabling the control of the maximum amount of used memory.

Putting a piece of code in a comment is a way to disable it: it cannot be run anymore.

To disable implies a permanant state: it is different from a conditional statement. 
Related : [Enable](Enable), [Disable Functions](Disable Functions)
