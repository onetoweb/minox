.. _top:
.. title:: Distance sale

`Back to index <index.rst>`_

=============
Distance sale
=============

.. contents::
    :local:


List distance sales
```````````````````

.. code-block:: php
    
    $results = $client->distanceSale->list();


Get distance sale
`````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->distanceSale->get($id);


Create / update distance sale
`````````````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    // generate a uuid4 when creating a new distance sale or use an existing distance sale id to update
    $id = Utils::uuid4();
    $results = $client->distanceSale->save($id, [
        'country_code' => 'string',
        'item_group_id' => 0,
        'item_id' => 'string',
        'ledger_account_id' => 0,
        'vat_id' => 0
    ]);


Delete distance sale
````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->distanceSale->delete($id);


`Back to top <#top>`_