<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Nom',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nom\' is required.'
    )
    ),
    'address' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Adresse postale',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Adresse postale\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    'agree' => array(
    'order' => 5,
    'type' => 'checkbox',
    'label' => 'J&#39;accepte les conditions d&#39;utilisation',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'J&#39;accepte les conditions d&#39;utilisation\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>