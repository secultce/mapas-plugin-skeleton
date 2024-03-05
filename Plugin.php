<?php

declare(strict_types=1);

namespace MeuPlugin;

use Controllers\MeuPluginController;
use MapasCulturais\App;
use MapasCulturais\Plugin as MapasPlugin;

class Plugin extends MapasPlugin
{
    public function _init(): void
    {
        $app = App::i();
        $app->hook('template(site.index.main-header):begin', function() {
            $entity = $this->controller->requestedEntity;
            $this->part('meu-plugin/index.php', ['Entity' => $entity]);
        });
    }

    public function register(): void
    {
        $app = App::i();
        $app->registerController('meu-plugin', MeuPluginController::class);
    }
}
