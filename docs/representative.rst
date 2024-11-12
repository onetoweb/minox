.. _top:
.. title:: Representative

`Back to index <index.rst>`_

==============
Representative
==============

.. contents::
    :local:


List representative
```````````````````

.. code-block:: php
    
    $results = $client->representative->list();


Update / create representative
``````````````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->representative->save($id, [
        'name' => 'representative name',
    ]);


`Back to top <#top>`_