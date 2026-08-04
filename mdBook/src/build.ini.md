# Build
A build is the automated process of transforming source code into a deployable artifact. Build steps typically include: installing dependencies, running static analysis, executing tests, generating assets, and packaging the application.

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

## See Also

+ [Phing — PHP build tool](https://www.phing.info/)
+ [Composer scripts](https://getcomposer.org/doc/articles/scripts.md)
+ [Deployer — PHP deployment tool](https://deployer.org/)

Related : [Continuous Integration (CI)](Continuous Integration (CI)), [DevOps](DevOps), [Composer](Composer), [Deployment](Deployment), [Test](Test), [Makefile](Makefile)
