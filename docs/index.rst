.. title:: Index

Index
=====

.. contents::
    :local:

===========
Basic Usage
===========

Setup

.. code-block:: php
    
    require 'vendor/autoload.php';
    
    use Onetoweb\Minox\Client;
    use Onetoweb\Minox\Token;
    use Symfony\Component\HttpFoundation\Session\Session;
    use Symfony\Component\HttpFoundation\Request;
    
    // start session
    $session = new Session();
    $session->start();
    
    // param
    $clientNumber = 42;
    $clientId = 'client_id';
    $clientSecret = 'client_secret';
    
    // setup client
    $client = new Client($clientNumber, $clientId, $clientSecret);
    
    // required for most but not all endpoint methods
    $administrationId = 42
    $client->setAdministrationId($administrationId);
    
    // setup token update callback
    $client->setTokenUpdateCallback(function(Token $token) use ($session) {
        
        // store token
        $session->set('token', [
            'access_token' => $token->getAccessToken(),
            'refresh_token' => $token->getRefreshToken(),
            'expires' => $token->getExpires(),
        ]);
        
    });
    
    /**
     * Authorization workflow
     */
    
    // get request
    $request = Request::createFromGlobals();
    
    if ($session->get('token') !== null) {
        
        // load token from storage
        $storedToken = $session->get('token');
        
        // build token
        $token = new Token(
            $storedToken['access_token'],
            $storedToken['refresh_token'],
            $storedToken['expires']
        );
        
        // set token
        $client->setToken($token);
        
    } elseif ($request->get('code')) {
        
        // (optional) compare states
        if ($request->get('state') !== $session->get('state')) {
            throw new \Exception('states do not match');
        }
        
        // request token from code
        $client->requestTokenFromCode($request->get('code'));
        
    } else {
        
        // get authorization url
        $redirectUrl = 'https://www.example.com/';
        
        $scope = [
            'administration:read',
            'administration:write',
        ];
        
        // (optional) generate a state param
        $state = bin2hex(random_bytes(16));
        
        $session->set('state', $state);
        
        $authorizationUrl = $client->getAuthorizationUrl($redirectUrl, $scope, $state);
        
        // display authorization url
        printf('<a href="%1$s">%1$s</a>', $authorizationUrl);
    }


======
Scopes
======

`Scopes <scopes.rst>`_


=================
Endpoint examples
=================

* `Distance sale <distance_sale.rst>`_
* `Accrual <accrual.rst>`_
* `Invoice <invoice.rst>`_
* `Payable <payable.rst>`_
* `Receivable <receivable.rst>`_
* `Reporting <reporting.rst>`_
* `Transaction line batch <transaction_line_batch.rst>`_
* `Transaction line <transaction_line.rst>`_
* `VAT declaration <vat_declaration.rst>`_
* `Administration <administration.rst>`_
* `Budget <budget.rst>`_
* `Cost center <cost_center.rst>`_
* `Cost type <cost_type.rst>`_
* `Customer <customer.rst>`_
* `Customer type <customer_type.rst>`_
* `Document <document.rst>`_
* `Item <item.rst>`_
* `Item group <item_group.rst>`_
* `Journal <journal.rst>`_
* `Ledger <ledger.rst>`_
* `Mandate <mandate.rst>`_
* `Payment term <payment_term.rst>`_
* `Profit loss balance <profit_loss_balance.rst>`_
* `Region <region.rst>`_
* `Representative <representative.rst>`_
* `Supplier <supplier.rst>`_
* `VAT <vat.rst>`_
* `Meta <meta.rst>`_
* `Other document <other_document.rst>`_
* `Document text <document_text.rst>`_
* `Email history <email_history.rst>`_
* `Import Task <import_task.rst>`_
* `Job <job.rst>`_
* `Ocr <ocr.rst>`_
* `Loket.nl <loket_nl.rst>`_
* `Mollie <mollie.rst>`_
* `Nmbrs <nmbrs.rst>`_
* `Paragon <paragon.rst>`_
* `Webhook <webhook.rst>`_

