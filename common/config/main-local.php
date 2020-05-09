<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
			/*
            'dsn' => 'mysql:host=localhost;dbname=kusdemos_crmdb',
            'username' => 'kusdemos_crmdb',
            'password' => 'z9v-TSV$Hg!R',
            'charset' => 'utf8',
			*/
			'dsn' => 'mysql:host=localhost;dbname=bluebook',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
