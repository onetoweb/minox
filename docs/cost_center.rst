.. _top:
.. title:: Cost center

`Back to index <index.rst>`_

===========
Cost center
===========

.. contents::
    :local:


List cost centers
`````````````````

.. code-block:: php
    
    $results = $client->costCenter->list();


Create / update cost center
```````````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->costCenter->save($id, [
        'description' => 'test',
        'search' => [
            [
                'id' => 'key1',
                'value' => 'TEST'
                
            ]
        ]
    ]);


`Back to top <#top>`_