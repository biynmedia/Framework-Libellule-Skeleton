<?php

use Libellule\Core\Core;
use Symfony\Component\HttpFoundation\Request;

# 1. Chargement de l'Autoload de Composer
require __DIR__ . '/../vendor/autoload.php';

# 2. Récupération de la Global Request
$request = Request::createFromGlobals();

# 3. Récupération des routes
require '../config/routes.php';

# 4. Initialisation de l'application
$core = new Core($l_routes);

# 5. Traitement de la Requete par notre classe Core
$response = $core->handle($request);

# 6. Retour de la réponse au navigateur du client.
$response->send();
