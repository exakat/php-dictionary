# Software Bill Of Material (SBOM)
A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project. It lists every piece of code, directly included or indirectly pulled in via dependencies, so one knows exactly what's in the application source code. It makes possible to track vulnerabilities, licenses, and outdated libraries.

For PHP projects, an SBOM typically contains:

+ Composer dependencies: these are the packages listed in composer.json, and their actual vesrion in composer.lock
+ PHP version, core extensions and third party extensions
+ System dependencies versions: the underlying librairies that PHP extensions depend upon
+ Licenses for each component
+ Known vulnerabilities, if any, such as CVEs from the PHP Security Advisories Database

SBOM uses the Cyclone DX format as a standard.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sbom.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sbom.ini.html","name":"Software Bill Of Material (SBOM)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Software Bill Of Material (SBOM).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Software_supply_chain)**
## See Also

+ [Syft](https://github.com/anchore/syft)
+ [CycloneDX PHP Composer Plugin](https://github.com/CycloneDX/cyclonedx-php-composer)

## Related

+ [Dependency](dependency.ini.html)
+ [Specification](specification.ini.html)
+ [Supply Chain Attack](supply-chain-attack.ini.html)
