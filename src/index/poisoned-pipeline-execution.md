# Poisoned Pipeline Execution (PPE)
Poisoned Pipeline Execution, or PPE, is a CI/CD security attack in which an attacker injects malicious code into a repository's CI/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment.

The attack exploits the automatic execution of pipeline definitions when a pull request or commit is made. Because these pipelines often have access to secrets, tokens, deployment credentials, and cloud infrastructure, a successful PPE attack can lead to secret exfiltration, artifact tampering, supply chain compromise, or full environment takeover.

There are two main variants:

+ Direct PPE, D-PPE: the attacker modifies the pipeline configuration file directly in their branch
+ Indirect PPE, I-PPE: the attacker modifies a file consumed by the pipeline rather than the pipeline definition itself

Mitigations include: requiring human approval before running pipelines on external pull requests, pinning actions to full commit SHAs, restricting secret access to protected branches, and auditing pipeline definitions as part of code review.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/poisoned-pipeline-execution.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/poisoned-pipeline-execution.html","name":"Poisoned Pipeline Execution (PPE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:30:49 +0000","dateModified":"Tue, 14 Jul 2026 05:30:49 +0000","description":"Poisoned Pipeline Execution, or PPE, is a CI\/CD security attack in which an attacker injects malicious code into a repository's CI\/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Poisoned Pipeline Execution (PPE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Poisoned Pipeline Execution (PPE)"}]}]}</script>
**[Documentation](https://www.cidersecurity.io/blog/research/ppe-poisoned-pipeline-execution/)**
## See Also

+ [GitHub Actions: Security hardening](https://docs.github.com/en/actions/security-guides/security-hardening-for-github-actions)
+ [Top 10 CI/CD Security Risks](https://www.cidersecurity.io/top-10-cicd-security-risks/)

## Related

+ [Pipeline](pipeline.html)
+ [Continuous Integration (CI)](ci.html)
+ [Continuous Delivery (CD)](cd.html)
+ [Supply Chain Attack](supply-chain-attack.html)
+ [Security](security.html)
