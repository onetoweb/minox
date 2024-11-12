.. _top:
.. title:: Customer type

`Back to index <index.rst>`_

=============
Customer type
=============

.. contents::
    :local:


List customer types
```````````````````

.. code-block:: php
    
    $results = $client->customerType->list();


Create / update customer type
`````````````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->customerType->save($id, [
        'description' => 'test',
    ]);


`Back to top <#top>`_