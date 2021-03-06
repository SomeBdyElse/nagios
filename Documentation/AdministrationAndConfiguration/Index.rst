﻿

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)

.. _administration-and-configuration:

Administration and Configuration
--------------------------------

Monitoring a TYPO3 instance is usually the responsibility of a system manager or administrator. Therefore “normal users” (unprivileged backend users such as editors) can not configure the extension. Access to the “Extension Manager” is needed, which requires an administrator account in TYPO3.

It is important to understand that you control the "features" (the information about the TYPO3 system which are passed to the Nagios® server) on the TYPO3 side. The Nagios® server (the TYPO3 plugin) reads, parses and *interprets* the information only.

This means, if a specific information is disabled in the TYPO3 extension, it is not passed to the Nagios® server and therefore Nagios® will not react if there is a problem (e.g. outdated TYPO3 or PHP version). This also means, that the Nagios® server is the component responsible for analysising the data, not the TYPO3 instance. The TYPO3 extension compiles and outputs the data only, without any logic to assess of there is a problem or not.


.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

   Configuration/Index
   Typo3BehindAProxy/Index
