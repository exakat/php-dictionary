# Package Manager
A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages. Packages are reusable units of code, often called libraries or dependencies.

In the PHP ecosystem, Composer is the dominant package manager. It resolves dependency trees, downloads packages from Packagist, and generates an autoloader. The ``composer.json`` file declares direct dependencies, while ``composer.lock`` pins the exact versions of every resolved package.

Other ecosystems have their own package managers: npm and Yarn for JavaScript, pip for Python, gem for Ruby, and apt or brew at the OS level. PHP also has PEAR, older, mostly replaced by Composer, and PIE, a modern extension installer.

Package managers bring reproducibility, security auditability, and semantic versioning to dependency management.
## See Also

+ [Composer documentation](https://getcomposer.org/doc/)

Related : [Composer](Composer), [Packagist](Packagist), [PEAR](PEAR), [PHP Installer For Extensions (PIE)](PHP Installer For Extensions (PIE)), [Dependency](Dependency), [Supply Chain](Supply Chain), [Semantic Versioning](Semantic Versioning), [Checksum](Checksum)
