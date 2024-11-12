.. _top:
.. title:: Document

`Back to index <index.rst>`_

========
Document
========

.. contents::
    :local:


List documents
``````````````

.. code-block:: php
    
    $results = $client->document->list();


Get document
````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->document->get($id);


Create document
```````````````

.. code-block:: php
    
    $results = $client->document->create([
        'name' => 'filename.pdf',
        'type' => 'purchase',
        'blobs' => [[
            'name' => 'string',
            'uploaded' => false,
            'mimeType' => 'application/pdf'
        ]]
    ]);


Update document
```````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->document->update($id, [
        'name' => 'filename.pdf',
        'type' => 'purchase',
        'blobs' => [[
            'name' => 'string',
            'uploaded' => false,
            'mimeType' => 'application/pdf'
        ]]
    ]);


Delete document
```````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->document->delete($id);


`Back to top <#top>`_