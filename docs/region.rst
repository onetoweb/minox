.. _top:
.. title:: Region

`Back to index <index.rst>`_

======
Region
======

.. contents::
    :local:


List regions
````````````

.. code-block:: php
    
    $results = $client->region->list();


Update / create region
```````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->region->save($id, [
        'description' => 'region description',
    ]);


`Back to top <#top>`_