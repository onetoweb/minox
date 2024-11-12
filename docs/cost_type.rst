.. _top:
.. title:: Cost type

`Back to index <index.rst>`_

=========
Cost type
=========

.. contents::
    :local:


List cost types
```````````````

.. code-block:: php
    
    $results = $client->costType->list();


Create / update cost type
`````````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->costType->save($id, [
        'description' => 'test',
        'search' => [
            [
                'id' => 'key1',
                'value' => 'TEST'
                
            ]
        ]
    ]);


`Back to top <#top>`_