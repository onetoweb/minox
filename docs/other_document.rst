.. _top:
.. title:: Other document

`Back to index <index.rst>`_

==============
Other document
==============

.. contents::
    :local:


Get document
````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->otherDocument->get($id);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Upload document to transaction line batch
`````````````````````````````````````````

.. code-block:: php
    
    $batchId = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $filepath = '/path/to/file.pdf';
    $results = $client->otherDocument->transactionLineBatch($batchId, $filepath);


Get document to transaction line batch
``````````````````````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $batchId = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->otherDocument->getBatchDocument($batchId);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Delete document to transaction line batch
`````````````````````````````````````````

.. code-block:: php
    
    $batchId = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->otherDocument->deleteBatchDocument($batchId);


`Back to top <#top>`_