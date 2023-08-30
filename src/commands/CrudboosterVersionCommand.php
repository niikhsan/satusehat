<?php namespace niikhsan\satusehat\commands;

use App;
use Illuminate\Console\Command;

class CrudboosterVersionCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'satusehat:version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'satusehat Version Command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public static $version = "1.0.0";

    public function handle()
    {
        $this->info(static::$version);
    }
}
