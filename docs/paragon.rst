.. _top:
.. title:: Paragon

`Back to index <index.rst>`_

=======
Paragon
=======

.. contents::
    :local:


List paragon history
````````````````````

.. code-block:: php
    
    $results = $client->paragon->history();


Get paragon settings
````````````````````

.. code-block:: php
    
    $results = $client->paragon->settings();


Save paragon settings
`````````````````````

.. code-block:: php
    
    $results = $client->paragon->saveSettings([
        'token' => 'string',
        'organization_id' => 'string',
    ]);


Delete paragon settings
```````````````````````

.. code-block:: php
    
    $results = $client->paragon->deleteSettings();


`Back to top <#top>`_