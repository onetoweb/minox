.. _top:
.. title:: Email history

`Back to index <index.rst>`_

=============
Email history
=============

.. contents::
    :local:


List email history
``````````````````

.. code-block:: php
    
    $results = $client->emailHistory->list();


Get email attachment
````````````````````

.. code-block:: php
    
    $emailId = '{email_id}';
    $attachmentId = '{attachment_id}';
    $results = $client->emailHistory->getAttachment($emailId, $attachmentId);


Get reprocess attachment
````````````````````````

.. code-block:: php
    
    $emailId = '{email_id}';
    $attachmentId = '{attachment_id}';
    $results = $client->emailHistory->reprocessAttachment($emailId, $attachmentId);


`Back to top <#top>`_