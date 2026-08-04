# Supply Chain Attack
Supply Chain Attack is a security attack that uses dependencies to infect a program.

Modern applications are built on top of components which are fetched from central repositories. In the PHP world, composer is the most popular PHP repository.

When those external repositories are infected with malicious component or code, the dependency manager loads them like the rest of the code. Blind trust in the imported code lead to vulnerabilities.
## See Also

+ [PHP Supply Chain Attack on Composer](https://blog.sonarsource.com/php-supply-chain-attack-on-composer/)
+ [Supply Chain Security in PHP Projects](https://coderlegion.com/8958/supply-chain-security-in-php-projects?show=8958#q8958)
+ [Packagist PHP repo supply chain attack: 3 key takeaways](https://www.reversinglabs.com/blog/packagist-php-repo-supply-chain-threat-what-you-need-to-know)
+ [An Update on Composer & Packagist Supply Chain Security](https://blog.packagist.com/an-update-on-composer-packagist-supply-chain-security/)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

Related : [Supply Chain](Supply Chain), [Software Bill Of Material (SBOM)](Software Bill Of Material (SBOM)), [Poisoned Pipeline Execution (PPE)](Poisoned Pipeline Execution (PPE))
