# Package Manager
A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages. Packages are reusable units of code, often called libraries or dependencies.

In the PHP ecosystem, Composer is the dominant package manager. It resolves dependency trees, downloads packages from Packagist, and generates an autoloader. The ``composer.json`` file declares direct dependencies, while ``composer.lock`` pins the exact versions of every resolved package.

Other ecosystems have their own package managers: npm and Yarn for JavaScript, pip for Python, gem for Ruby, and apt or brew at the OS level. PHP also has PEAR, older, mostly replaced by Composer, and PIE, a modern extension installer.

Package managers bring reproducibility, security auditability, and semantic versioning to dependency management.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/package-manager.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/package-manager.html","name":"Package Manager","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:11:17 +0000","dateModified":"Thu, 09 Jul 2026 09:11:17 +0000","description":"A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Package Manager.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://getcomposer.org/)**
## See Also

+ [Composer documentation](https://getcomposer.org/doc/)

## Related

+ [Composer](composer.ini.html)
+ [Packagist](packagist.ini.html)
+ [PEAR](pear.ini.html)
+ [PHP Installer For Extensions (PIE)](pie.ini.html)
+ [Dependency](dependency.ini.html)
+ [Supply Chain](supply-chain.ini.html)
+ [Semantic Versioning](semantic-versioning.ini.html)
+ [Checksum](checksum.ini.html)
