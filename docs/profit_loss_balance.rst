.. _top:
.. title:: Profit loss balance

`Back to index <index.rst>`_

===================
Profit loss balance
===================

.. contents::
    :local:


List profit loss balance
````````````````````````

.. code-block:: php
    
    $results = $client->profitLossBalance->list();


Create / profit loss balance
````````````````````````````

.. code-block:: php
    
    $id = 270;
    $results = $client->profitLossBalance->save($id, [
        'description' => 'LANGLOPENDE SCHULDEN',
        'type' => 'automatic',
        'is_balance_group' => true,
        'is_balance' => true,
    ]);


Delete profit loss balance
``````````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->profitLossBalance->delete($id);


`Back to top <#top>`_