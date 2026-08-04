# Preappend File Directive
The ``auto_prepend_file`` PHP directive adds an ``require`` call before the main file. The file is then automatically executed, and all its definitions are added. They are then available later in the execution.

Only one file is prepended: if several files needs to be, they should be included in a centralized file.
## See Also

+ [How to Use auto_prepend_file in PHP Effectively](https://medium.com/serveravatar/how-to-use-auto-prepend-file-in-php-effectively-ee3917b668f6)
+ [Mastering PHP's auto_prepend_file: A Comprehensive Guide](https://kitemetric.com/blogs/mastering-php-s-auto-prepend-file-a-comprehensive-guide)

Related : [Disable Functions](Disable Functions), [Disable Classes](Disable Classes)
