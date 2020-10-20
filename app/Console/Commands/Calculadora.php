<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class calculadora extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:numbers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add, subtract, multiply and divide two parameters';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle($num1, $num2)
    {
        $num1 = 10;
        $num2 = 15;

        if ($num1 === 10 and $num2 === 15){
            return 25;
        }
        if ($num1 - $num2 === 5){
            return 5;
        }

    }
}
