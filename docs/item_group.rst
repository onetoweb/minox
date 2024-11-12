.. _top:
.. title:: Item group

`Back to index <index.rst>`_

==========
Item group
==========

.. contents::
    :local:


List item groups
````````````````

.. code-block:: php
    
    $results = $client->itemGroup->list();


Create / update item group
``````````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->itemGroup->save($id, [
        'description' => 'Foo bars',
        'ledger_accounts' => [
            'sales_revenue_nl' => [
                'id' => 8060
            ],
            'sales_revenue_eu' => [
                'id' => 8160
            ],
            'sales_revenue_non_eu' => [
                'id' => 8260
            ],
            'sales_revenue_shifted' => [
                'id' => 8300
            ],
        ]
    ]);


`Back to top <#top>`_