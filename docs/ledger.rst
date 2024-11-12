.. _top:
.. title:: Ledger

`Back to index <index.rst>`_

======
Ledger
======

.. contents::
    :local:


List ledgers
````````````

.. code-block:: php
    
    $results = $client->ledger->list();


Get ledger
``````````

.. code-block:: php
    
    $id = 42;
    $results = $client->ledger->get($id);


Create / update ledger
``````````````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->ledger->save($id, [
        'description' => 'string',
        'aggregation' => [
            'aggregation_level' => 0,
            'description' => 'string'
        ],
        'vat' => [
            'id' => 0
        ],
        'allow_free_vat_input' => true,
        'debit_credit_suggestion' => 'debet',
        'balance' => [
            'id' => 0
        ],
        'aggregate_transactions' => true,
        'quantity_applicable' => true,
        'cost_type' => [
            'id' => 0
        ],
        'blocked' => [
            'active' => true,
            'reason' => 'string'
        ],
        'budget_division' => [
            'id' => 0
        ],
        'year_budget' => 0,
        'memo' => [
            'active' => true,
            'text' => 'string'
        ]
    ]);


Delete ledger
`````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->ledger->delete($id);


`Back to top <#top>`_