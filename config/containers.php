<?php

return [
    PDO::class => \DI\object()->constructor(
        $parameters->pdo->dsn,
        $parameters->pdo->user,
        $parameters->pdo->password,
        []
    ),
];