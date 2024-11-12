.. _top:
.. title:: Mandate

`Back to index <index.rst>`_

=======
Mandate
=======

.. contents::
    :local:


List mandates
`````````````

.. code-block:: php
    
    $results = $client->mandate->list();


Get mandate
```````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->mandate->get($id);


Update / create mandate
```````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    // generate a uuid4 when creating a new mandate or use an existing mandate id to update
    $id = Utils::uuid4();
    $results = $client->mandate->save($id, [
        'customer_id' => 10005,
        'active' => true,
        'authorization_type' => 'one-off',
        'collection_type' => 'core',
        'signing_date' => '2020-12-01',
        'signing_city' => 'string',
        'first_collection' => true,
        'collection_date' => '2020-12-01'
    ]);


Delete mandate
``````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->mandate->get($id);


`Back to top <#top>`_