.. _top:
.. title:: Webhook

`Back to index <index.rst>`_

=======
Webhook
=======

.. contents::
    :local:


List webhooks
`````````````

.. code-block:: php
    
    $results = $client->webhook->list();


Get webhook
```````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->webhook->get($id);


Get webhook history
```````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->webhook->history($id);


Create webhook
``````````````

.. code-block:: php
    
    $results = $client->webhook->create([
        'description' => 'string',
        'enabled' => true,
        'url' => 'string',
        'retry_in_minutes' => 720,
        'notification_on_400' => 'string',
        'notification_on_500' => 'string',
        'authenticationType' => 'none',
        'bearer' => 'string',
        'username' => 'string',
        'password' => 'string',
        'notifications' => [
            'receivable' => true,
            'payable' => true
        ]
    ]);


Update webhook
``````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->webhook->update($id, [
        'description' => 'string',
        'enabled' => true,
        'url' => 'string',
        'retry_in_minutes' => 720,
        'notification_on_400' => 'string',
        'notification_on_500' => 'string',
        'authenticationType' => 'none',
        'bearer' => 'string',
        'username' => 'string',
        'password' => 'string',
        'notifications' => [
            'receivable' => true,
            'payable' => true
        ]
    ]);


`Back to top <#top>`_