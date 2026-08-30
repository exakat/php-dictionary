---
type: "concept"
title: "Build"
description: "A build is the automated process of transforming source code into a deployable artifact, performed by a build tool."
resource: "https://en.wikipedia.org/wiki/Software_build"
tags: ["concept", "devops"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Build

A build is the automated process of transforming source code into a deployable artifact, performed by a build tool. Build steps typically include: installing dependencies, running static analysis, executing tests, generating assets, and packaging the application.

Build processes are commonly driven by tools such as Make, Phing, Composer scripts, or shell scripts, and are integrated into a Continuous Integration pipeline.

A reproducible build produces the same artifact from the same source code, which is essential for reliable deployments.

```php
<?php

    // composer.json scripts section acts as a simple build runner
    // { "scripts": { "build": ["@lint", "@test", "@analyse"] } }
    
    // Phing build.xml target example:
    // <target name="build" depends="lint,test,package"/>

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Software_build](https://en.wikipedia.org/wiki/Software_build)

## See Also
- [Phing — PHP build tool](https://www.phing.info/)
- [Composer scripts](https://getcomposer.org/doc/articles/scripts.md)
- [Deployer — PHP deployment tool](https://deployer.org/)

## Related
- [Continuous Integration (CI)](/features/ci.md)
- [DevOps](/features/devops.md)
- [Composer](/features/composer.md)
- [Deployment](/features/deploy.md)
- [Test](/features/test.md)
- [Makefile](/features/makefile.md)

## Details
- Packagist: [phing/phing](https://packagist.org/packages/phing/phing)
- Packagist: [deployer/deployer](https://packagist.org/packages/deployer/deployer)

