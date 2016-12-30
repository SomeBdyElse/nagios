<?php

/*
 * This file is part of the TYPO3 CMS Extension "Nagios TYPO3 Monitoring"
 *
 * Author: Michael Schams <schams.net>
 * Website: https://schams.net
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Nagios TYPO3 Monitoring',
    'description' => 'Monitors TYPO3 instances and warns about insecure extensions, old TYPO3 versions, wrong PHP versions, etc. Requires a Nagios monitoring server.
Detailed documentation, screenshots and more at: http://schams.net/nagios',
    'category' => 'misc',
    'version' => '2.1.0',
    'state' => 'stable',
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Michael Schams (schams.net)',
    'author_email' => 'schams.net',
    'author_company' => 'https://schams.net',
    'constraints' => array (
        'depends' => array (
            'php' => '5.5.0-7.0.99',
            'typo3' => '7.0.0-8.999.999',
        ),
        'conflicts' => array (
        ),
        'suggests' => array (
        ),
    ),
);
