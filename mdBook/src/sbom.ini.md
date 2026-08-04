# Software Bill Of Material (SBOM)
A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project. It lists every piece of code, directly included or indirectly pulled in via dependencies, so one knows exactly what's in the application source code. It makes possible to track vulnerabilities, licenses, and outdated libraries.

For PHP projects, an SBOM typically contains:

+ Composer dependencies: these are the packages listed in composer.json, and their actual vesrion in composer.lock
+ PHP version, core extensions and third party extensions
+ System dependencies versions: the underlying librairies that PHP extensions depend upon
+ Licenses for each component
+ Known vulnerabilities, if any, such as CVEs from the PHP Security Advisories Database

SBOM uses the Cyclone DX format as a standard.

## See Also

+ [Syft](https://github.com/anchore/syft)
+ [CycloneDX PHP Composer Plugin](https://github.com/CycloneDX/cyclonedx-php-composer)

Related : [Dependency](Dependency), [Specification](Specification), [Supply Chain Attack](Supply Chain Attack)
