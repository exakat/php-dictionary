# Path
A path is a representation of the location of a file or directory within the directory structure. It describes the route or sequence of directories one must navigate from the root directory to reach a specific file or directory. There are two types of paths:

+ Absolute Path: this provides the complete path from the root directory to the specific file or directory. For example, in Unix-like systems, an absolute path might look like ``/home/user/documents/file.txt`` or in Windows, it might look like ``C:\Users\User\Documents\file.txt``.
+ Relative Path: this specifies the location of a file or directory relative to the current working directory. It doesn't start from the root directory but describes the path relative to the current directory . For example, if the current working directory is ``/home/user/`` and there is a file in the ``documents`` directory, the relative path might be ``documents/file.txt`` in Unix-like systems.

Paths are represented by strings. The local OS's directory separator is stored in a constant called ``DIRECTORY_SEPARATOR``. Generally, the ``/`` is converted into the local dialect when needed, although there are special cases for the ``/``, aka root, string.
## See Also

+ [php-path](https://php-path.readthedocs.io/en/latest/)

Related : [Stream](Stream), [Protocol](Protocol), [Dir](Dir), [File](File), [DIRECTORY_SEPARATOR](DIRECTORY_SEPARATOR), [Absolute](Absolute), [dirname](dirname), [\. Directory](\. Directory), [Dot-dot Directory \.\.](Dot-dot Directory \.\.), [Relative](Relative), [\. File](\. File)
