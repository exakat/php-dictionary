---
type: "PHP Feature"
title: "Package Manager"
description: "A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages."
resource: "https://getcomposer.org/"
tags: ["tool", "dependency", "ecosystem"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Package Manager

A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages. Packages are reusable units of code, often called libraries or dependencies.

In the PHP ecosystem, Composer is the dominant package manager. It resolves dependency trees, downloads packages from Packagist, and generates an autoloader. The ``composer.json`` file declares direct dependencies, while ``composer.lock`` pins the exact versions of every resolved package.

Other ecosystems have their own package managers: npm and Yarn for JavaScript, pip for Python, gem for Ruby, and apt or brew at the OS level. PHP also has PEAR, older, mostly replaced by Composer, and PIE, a modern extension installer.

Package managers bring reproducibility, security auditability, and semantic versioning to dependency management.

## Documentation
- [https://getcomposer.org/](https://getcomposer.org/)

## See Also
- [Composer documentation](https://getcomposer.org/doc/)

## Related
- [Composer](/features/composer.md)
- [Packagist](/features/packagist.md)
- [PEAR](/features/pear.md)
- [PHP Installer For Extensions (PIE)](/features/pie.md)
- [Dependency](/features/dependency.md)
- [Supply Chain](/features/supply-chain.md)
- [Semantic Versioning](/features/semantic-versioning.md)
- [Checksum](/features/checksum.md)

