# Package Manager
A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages. Packages are reusable units of code, often called libraries or dependencies.

In the PHP ecosystem, Composer is the dominant package manager. It resolves dependency trees, downloads packages from Packagist, and generates an autoloader. The ``composer.json`` file declares direct dependencies, while ``composer.lock`` pins the exact versions of every resolved package.

Other ecosystems have their own package managers: npm and Yarn for JavaScript, pip for Python, gem for Ruby, and apt or brew at the OS level. PHP also has PEAR, older, mostly replaced by Composer, and PIE, a modern extension installer.

Package managers bring reproducibility, security auditability, and semantic versioning to dependency management.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-manager.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-manager.html","name":"Package Manager","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:11:17 +0000","dateModified":"Thu, 09 Jul 2026 09:11:17 +0000","description":"A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Package Manager.html"]}],"alternateName":["dependency-manager"],"keywords":["tool","dependency","ecosystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/packagist.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pear.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pie.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supply-chain.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-versioning.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/getcomposer.org\/"},{"@type":"CreativeWork","name":"Composer documentation","url":"https:\/\/getcomposer.org\/doc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"package-manager"}]}]}</script>
**[Documentation](https://getcomposer.org/)**
## See Also

+ [Composer documentation](https://getcomposer.org/doc/)

## Related

+ [Composer](composer.html)
+ [Packagist](packagist.html)
+ [PEAR](pear.html)
+ [PHP Installer For Extensions (PIE)](pie.html)
+ [Dependency](dependency.html)
+ [Supply Chain](supply-chain.html)
+ [Semantic Versioning](semantic-versioning.html)
+ [Checksum](checksum.html)
