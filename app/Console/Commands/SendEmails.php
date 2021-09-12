<?php

namespace App\Console\Commands;

use App\Mail\CustomerRegisteredEmail;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

// implements ShouldQueue
class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email with the new registered customers';

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
    public function handle()
    {
        $customers = Customer::where('created_at', '>', \DB::raw('DATE_SUB(NOW(),INTERVAL 1 YEAR)'))->get();
        $data = "";
        $flag = 0;
        foreach ($customers as $customer) {
            if($flag == 0){
                $data .= $customer->name;
                $flag = 1;
                continue;
            }
            $data .= ", ".$customer->name;
        }
        // dd($data);
        $user = User::find(1);
         Mail::to($user)->send(new CustomerRegisteredEmail($data));

        return 0;
    }
}
