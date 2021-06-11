<?php

namespace drewwalton19216801\FortifyUIBootstrap\Commands;

use Illuminate\Console\Command;

class FortifyUIBootstrapCommand extends Command
{
    public $signature = 'fortify:bootstrap';

    public $description = 'Install FortifyUI-Bootstrap with views and resources';

    public function handle()
    {
        $this->publishAssets();

        $this->comment('FortifyUI-Bootstrap is now installed.');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'fortify-ui-bootstrap-resources', '--force' => true]);
    }
}
