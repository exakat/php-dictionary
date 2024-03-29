.. _path:

Path
----

A path is a representation of the location of a file or directory within the directory structure. It describes the route or sequence of directories  one must navigate from the root directory to reach a specific file or directory. There are two types of paths:

+ Absolute Path: This provides the complete path from the root directory to the specific file or directory. For example, in Unix-like systems, an absolute path might look like "/home/user/documents/file.txt" or in Windows, it might look like "C:\Users\User\Documents\file.txt." 
+ Relative Path: This specifies the location of a file or directory relative to the current working directory. It doesn't start from the root directory but describes the path relative to the directory you are currently in. For example, if the current working directory is "/home/user/" and you have a file in the "documents" directory, the relative path might be "documents/file.txt" in Unix-like systems.

In PHP, path are represented by strings. The local OS's directory separator is stored in a constant called ``DIRECTORY_SEPARATOR``. Generally, the ``/`` is converted into the local dialect when needed, although there are special cases for the ``/`` (aka root) string.


