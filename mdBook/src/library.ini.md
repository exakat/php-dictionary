# Library
A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications.

Libraries are included, and then executed: yet, they do not have an entry point of their own. The calling application controls when and how the library's code is invoked. This distinguishes a library from a framework, which imposes a structure and calls the application's code instead.

Libraries cover a wide range of concerns: string manipulation, date handling, HTTP clients, cryptography, image processing, data parsing, and more. Using a well-maintained library avoids reinventing the wheel and benefits from the work and review of the wider community.

Libraries are distributed through a package manager. The most common is ``Composer`` and libraries are indexed on ``Packagist``. A library is declared as a dependency in ``composer.json`` and loaded via the Composer autoloader. Choosing a library involves evaluating its activity, test coverage, license, and compatibility with the target PHP version.

Writing a library requires extra discipline compared to application code: the public API must be stable, backward compatibility must be maintained across versions, and the library should have no opinion about the application's framework or infrastructure.
## See Also

+ [Packagist](https://packagist.org/)
+ [Composer documentation](https://getcomposer.org/doc/)

Related : [Composer](Composer), [Packagist](Packagist), [Framework](Framework), [Dependency](Dependency), [Class Autoloading](Class Autoloading), [Open Source](Open Source), [Vendor Lock-in](Vendor Lock-in), [Application Programming Interface (API)](Application Programming Interface (API)), [Dynamic Loading](Dynamic Loading), [Foreign Function Interface (FFI)](Foreign Function Interface (FFI)), [Software Development Kit (SDK)](Software Development Kit (SDK))
