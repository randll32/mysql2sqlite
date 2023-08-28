<?php

namespace ConvertingToSqlite\Commands;

use Illuminate\Console\Command;

class ConvertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert-db:process {database}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a marketing email to a user';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        exec(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "mysql2sqlite " . $this->argument('database') . " | sqlite3 mysqlite3.db");

        return 0;
    }
}