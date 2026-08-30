---
type: "acronym"
title: "Software Bill Of Material (SBOM)"
description: "A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project."
resource: "https://en.wikipedia.org/wiki/Software_supply_chain"
tags: ["acronym", "software lifecycle"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Software Bill Of Material (SBOM)

A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project. It lists every piece of code, directly included or indirectly pulled in via dependencies, so one knows exactly what's in the application source code. It makes it possible to track vulnerabilities, licenses, and outdated libraries.

For PHP projects, an SBOM typically contains:

+ Composer dependencies: these are the packages listed in composer.json, and their actual version in composer.lock
+ PHP version, core extensions and third party extensions
+ System dependencies versions: the underlying libraries that PHP extensions depend upon
+ Licenses for each component
+ Known vulnerabilities, if any, such as CVEs from the PHP Security Advisories Database

SBOM uses the CycloneDX format as a standard.

## Documentation
- [https://en.wikipedia.org/wiki/Software_supply_chain](https://en.wikipedia.org/wiki/Software_supply_chain)

## See Also
- [Syft](https://github.com/anchore/syft)
- [CycloneDX PHP Composer Plugin](https://github.com/CycloneDX/cyclonedx-php-composer)

## Related
- [Dependency](/features/dependency.md)
- [Specification](/features/specification.md)
- [Supply Chain Attack](/features/supply-chain-attack.md)

