.. _top:
.. title:: Loket.nl

`Back to index <index.rst>`_

========
Loket.nl
========

.. contents::
    :local:


Connect to loket.nl
```````````````````

.. code-block:: php
    
    $state = 'string';
    $results = $client->loketNl->connect($state);


Get loket.nl loonrun
````````````````````

.. code-block:: php
    
    $results = $client->loketNl->loonrun();


Get loket.nl loonrun, check for new
```````````````````````````````````

.. code-block:: php
    
    $results = $client->loketNl->loonrunCheckForNew();


Get loket.nl settings
`````````````````````

.. code-block:: php
    
    $results = $client->loketNl->settings();


Save loket.nl settings
``````````````````````

.. code-block:: php
    
    $results = $client->loketNl->saveSettings([
        'state' => 'string',
        'connection' => [
            'externalAdministrationId' => 'string',
            'startFromDate' => '2024-11-12',
            'active' => true,
            'email' => 'string',
            'journalId' => 'string',
            'ledgerAccountId' => 0,
            'costCenterId' => 0
        ]
    ]);


Delete loket.nl settings
````````````````````````

.. code-block:: php
    
    $results = $client->loketNl->deleteSettings();


`Back to top <#top>`_