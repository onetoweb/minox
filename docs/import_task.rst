.. _top:
.. title:: Import task

`Back to index <index.rst>`_

===========
Import task
===========

.. contents::
    :local:


List import tasks
`````````````````

.. code-block:: php
    
    $results = $client->importTask->list();


Cancel import task
``````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->importTask->cancel($id);


Create import task
``````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    // generate a uuid4 when creating a new import task batch or use an existing batch id to update
    $batchId = Utils::uuid4();
    
    $results = $client->importTask->import($batchid, [
        'description' => 'string'
    ]);


Start import task
`````````````````

.. code-block:: php
    
    $batchId = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->importTask->start($batchid, [
        'description' => 'string'
    ]);

`Back to top <#top>`_