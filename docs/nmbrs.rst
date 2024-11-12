.. _top:
.. title:: Nmbrs

`Back to index <index.rst>`_

=====
Nmbrs
=====

.. contents::
    :local:


List nmbrs loonrun
``````````````````

.. code-block:: php
    
    $results = $client->mmbrs->loonrun();


List nmbrs loonrun, check for new
`````````````````````````````````

.. code-block:: php
    
    $results = $client->mmbrs->loonrunCheckForNew();


Get nmbrs settings
``````````````````

.. code-block:: php
    
    $results = $client->mmbrs->settings();


Save nmbrs settings
```````````````````

.. code-block:: php
    
    $results = $client->nmbrs->saveSettings([
        'username' => 'string',
        'api_token' => 'string',
        'company_id' => 0,
        'start_period' => [
            'id' => 0,
            'fiscal_year' => 0
        ],
        'connection_active' => true,
        'journal_id' => 'ZZZZ',
        'default_ledgeraccount_id' => 0,
        'pain_active' => true,
        'costCenterId' => 0
    ]);


Delete nmbrs settings
`````````````````````

.. code-block:: php
    
    $results = $client->nmbrs->deleteSettings();


Test nmbrs credentials
``````````````````````

.. code-block:: php
    
    $results = $client->nmbrs->testCredentials([
        'username' => 'string',
        'api_token' => 'string'
    ]);


`Back to top <#top>`_