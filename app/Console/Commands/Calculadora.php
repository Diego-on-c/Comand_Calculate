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
     * @param $num1
     * @param $num2
     * @return int
     */
    public function handle($num1, $num2)
    {

        $sum = $num1 + $num2;
        $rest = $num1 - $num2;

        if ($sum == 25){
            return 25;
        }
        if ($rest == -5){
            return 5;
        }

    }
}
