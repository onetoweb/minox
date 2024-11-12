.. _top:
.. title:: Item

`Back to index <index.rst>`_

====
Item
====

.. contents::
    :local:


List items
``````````

.. code-block:: php
    
    $results = $client->item->list();


Get item
````````

.. code-block:: php
    
    $id = '2000';
    $results = $client->item->get($id);


Create / update item
````````````````````

.. code-block:: php
    
    $id = '2000';
    $results = $client->item->save($id, [
        'description' => 'string',
        'extended_description' => 'string',
        'search' => [[
            'id' => 'string',
            'value' => 'string'
        ]],
        'item_group' => [
            'id' => 0,
            'value' => 'string'
        ],
        'discount_group' => [
            'id' => 0,
            'value' => 'string'
        ],
        'vat' => [
            'id' => 9999,
            'description' => 'Af te dragen (1a, 1b)'
        ],
        'statistics_per' => 'item',
        'amount_applicable' => true,
        'track_sales_history' => true,
        'weight' => 0,
        'unit_packaging' => 'string',
        'pack_quantity' => 0,
        'blocked' => true,
        'price' => 0,
        'price_deviant' => [[
            'id' => 'string',
            'value' => 0
        ]],
        'price_recommended' => 0,
        'price_per_quantity' => 0,
        'content' => 0,
        'price_purchase' => 0,
        'g_rek_account' => true,
        'custom_fields' => [[
            'id' => 'string',
            'value' => 'string'
        ]],
        'memo' => [
            'active' => true,
            'text' => 'string'
        ]
    ]);


Update (patch) item
```````````````````

.. code-block:: php
    
    $id = '2000';
    $results = $client->item->update($id, [
        'description' => 'string',
        'extended_description' => 'string',
        'search' => [
            [
                'id' => 'string',
                'value' => 'string'
            ]
        ],
        'item_group' => [
            'id' => 0,
            'value' => 'string'
        ],
        'discount_group' => [
            'id' => 0,
            'value' => 'string'
        ],
        'vat' => [
            'id' => 9999,
            'description' => 'Af te dragen (1a, 1b)'
        ],
        'statistics_per' => 'item',
        'amount_applicable' => true,
        'track_sales_history' => true,
        'weight' => 0,
        'unit_packaging' => 'string',
        'pack_quantity' => 0,
        'blocked' => true,
        'price' => 0,
        'price_deviant' => [
            [
                'id' => 'string',
                'value' => 0
            ]
        ],
        'price_recommended' => 0,
        'price_per_quantity' => 0,
        'content' => 0,
        'price_purchase' => 0,
        'g_rek_account' => true,
        'custom_fields' => [
            [
                'id' => 'string',
                'value' => 'string'
            ]
        ],
        'memo' => [
            'active' => true,
            'text' => 'string'
        ]
    ]);


Delete item
```````````

.. code-block:: php
    
    $id = '2000';
    $results = $client->item->delete($id);


`Back to top <#top>`_