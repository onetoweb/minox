.. _top:
.. title:: Mollie

`Back to index <index.rst>`_

======
Mollie
======

.. contents::
    :local:


Get mollie settings
````````````````````

.. code-block:: php
    
    $results = $client->mollie->settings();


Save mollie settings
````````````````````

.. code-block:: php
    
    $results = $client->mollie->saveSettings([
        'api_token' => 'string',
        'connection_active' => true,
        'journal_id' => 'ZZZZ',
        'default_ledgeraccount_id' => 0
    ]);


Delete mollie settings
``````````````````````

.. code-block:: php
    
    $results = $client->mollie->deleteSettings();


Test mollie credentials
```````````````````````

.. code-block:: php
    
    $results = $client->mollie->testCredentials([
        'api_token' => 'string',
        'connection_active' => true,
        'journal_id' => 'ZZZZ',
        'default_ledgeraccount_id' => 0
    ]);


`Back to top <#top>`_