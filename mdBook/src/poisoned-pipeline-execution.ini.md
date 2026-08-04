# Poisoned Pipeline Execution (PPE)
Poisoned Pipeline Execution, or PPE, is a CI/CD security attack in which an attacker injects malicious code into a repository's CI/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment.

The attack exploits the automatic execution of pipeline definitions when a pull request or commit is made. Because these pipelines often have access to secrets, tokens, deployment credentials, and cloud infrastructure, a successful PPE attack can lead to secret exfiltration, artifact tampering, supply chain compromise, or full environment takeover.

There are two main variants:

+ Direct PPE, D-PPE: the attacker modifies the pipeline configuration file directly in their branch
+ Indirect PPE, I-PPE: the attacker modifies a file consumed by the pipeline rather than the pipeline definition itself

Mitigations include: requiring human approval before running pipelines on external pull requests, pinning actions to full commit SHAs, restricting secret access to protected branches, and auditing pipeline definitions as part of code review.
## See Also

+ [GitHub Actions: Security hardening](https://docs.github.com/en/actions/security-guides/security-hardening-for-github-actions)
+ [Top 10 CI/CD Security Risks](https://www.cidersecurity.io/top-10-cicd-security-risks/)

Related : [Pipeline](Pipeline), [Continuous Integration (CI)](Continuous Integration (CI)), [Continuous Delivery (CD)](Continuous Delivery (CD)), [Supply Chain Attack](Supply Chain Attack), [Security](Security)
