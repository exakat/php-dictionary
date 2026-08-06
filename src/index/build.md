# Build
A build is the automated process of transforming source code into a deployable artifact. Build steps typically include: installing dependencies, running static analysis, executing tests, generating assets, and packaging the application.

Build processes are commonly driven by tools such as Make, Phing, Composer scripts, or shell scripts, and are integrated into a Continuous Integration pipeline.

A reproducible build produces the same artifact from the same source code, which is essential for reliable deployments.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/build.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/build.html","name":"Build","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:19:44 +0000","dateModified":"Sun, 28 Jun 2026 10:19:44 +0000","description":"A build is the automated process of transforming source code into a deployable artifact","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Build.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // composer.json scripts section acts as a simple build runner
    // { "scripts": { "build": ["@lint", "@test", "@analyse"] } }
    
    // Phing build.xml target example:
    // <target name="build" depends="lint,test,package"/>

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Software_build)**
## See Also

+ [Phing — PHP build tool](https://www.phing.info/)
+ [Composer scripts](https://getcomposer.org/doc/articles/scripts.md)
+ [Deployer — PHP deployment tool](https://deployer.org/)

## Related

+ [Continuous Integration (CI)](ci.ini.html)
+ [DevOps](devops.ini.html)
+ [Composer](composer.ini.html)
+ [Deployment](deploy.ini.html)
+ [Test](test.ini.html)
+ [Makefile](makefile.ini.html)

## Related packages

+ [phing/phing](https://packagist.org/packages/phing/phing)
+ [deployer/deployer](https://packagist.org/packages/deployer/deployer)
