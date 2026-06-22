.. _poisoned-pipeline-execution:
.. _ppe:
.. meta::
	:description:
		Poisoned Pipeline Execution (PPE): Poisoned Pipeline Execution, or PPE, is a CI/CD security attack in which an attacker injects malicious code into a repository's CI/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Poisoned Pipeline Execution (PPE)
	:twitter:description: Poisoned Pipeline Execution (PPE): Poisoned Pipeline Execution, or PPE, is a CI/CD security attack in which an attacker injects malicious code into a repository's CI/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Poisoned Pipeline Execution (PPE)
	:og:type: article
	:og:description: Poisoned Pipeline Execution, or PPE, is a CI/CD security attack in which an attacker injects malicious code into a repository's CI/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/poisoned-pipeline-execution.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Poisoned Pipeline Execution (PPE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Poisoned Pipeline Execution, or PPE, is a CI\/CD security attack in which an attacker injects malicious code into a repository's CI\/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Poisoned Pipeline Execution (PPE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Poisoned Pipeline Execution (PPE)
---------------------------------

Poisoned Pipeline Execution, or PPE, is a CI/CD security attack in which an attacker injects malicious code into a repository's CI/CD pipeline configuration or triggered workflow, causing the pipeline to execute attacker-controlled code in a trusted environment.

The attack exploits the automatic execution of pipeline definitions when a pull request or commit is made. Because these pipelines often have access to secrets, tokens, deployment credentials, and cloud infrastructure, a successful PPE attack can lead to secret exfiltration, artifact tampering, supply chain compromise, or full environment takeover.

There are two main variants:
+ Direct PPE, D-PPE: the attacker modifies the pipeline configuration file directly in their branch.
+ Indirect PPE, I-PPE: the attacker modifies a file consumed by the pipeline rather than the pipeline definition itself.

Mitigations include: requiring human approval before running pipelines on external pull requests, pinning actions to full commit SHAs, restricting secret access to protected branches, and auditing pipeline definitions as part of code review.

`Documentation <https://www.cidersecurity.io/blog/research/ppe-poisoned-pipeline-execution/>`__

See also `Poisoned Pipeline Execution <https://www.cidersecurity.io/blog/research/ppe-poisoned-pipeline-execution/>`_, `GitHub Actions: Security hardening <https://docs.github.com/en/actions/security-guides/security-hardening-for-github-actions>`_ and `Top 10 CI/CD Security Risks <https://www.cidersecurity.io/top-10-cicd-security-risks/>`_.

Related : :ref:`Pipeline <pipeline>`, :ref:`Continuous Integration (CI) <ci>`, :ref:`Continuous Delivery (CD) <cd>`, :ref:`Supply Chain Attack <supply-chain-attack>`, :ref:`Security <security>`
