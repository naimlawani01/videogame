<?php

$res = 'SELECT edition.editeur, plateforme.nom as plateforme, edition.pegi, support.nom as support FROM edition RIGHT JOIN plateforme ON edition.platforme_id = plateforme.id RIGHT JOIN support ON edition.support_id = support.id';
