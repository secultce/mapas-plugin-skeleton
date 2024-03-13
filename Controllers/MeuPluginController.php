<?php

declare(strict_types=1);

namespace Controllers;

use MapasCulturais\App;
use MapasCulturais\Controller;

class MeuPluginController extends Controller
{
    public function GET_index(): void
    {
        $app = App::i();
        $entity = $app->repo('Home');
        $this->render('meu-plugin/index', ['entity' => $entity]);
    }
}
