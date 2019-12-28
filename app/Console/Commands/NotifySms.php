<?php

namespace App\Console\Commands;

use App\User;
use App\Siswa;
use App\Wsiswa;
use App\Kela;
use Carbon\Carbon;
use App\Categorie;
use App\Pembayaran;
use Illuminate\Console\Command;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Notifications\Messages\NexmoMessage;

class NotifySms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {

        $bayaran = Pembayaran::where(function($q){
            return $q
                     ->whereNull('biaya_semester')
                     ->orWhereNull('psb')
                     ->orWhereNull('pts_ganjil')
                     ->orWhereNull('pts_genap')
                     ->orWhereNull('spas')
                     ->orWhereNull('pat')
                     ->orWhereNull('raport')
                     ->orWhereNull('daftar_ulang')
                     ->orWhereNull('un');
        })->get();

        foreach ($bayaran as $getNoTelp) {
            return Nexmo::message()->send([
                            'to' => '+62'. $getNoTelp->wsiswa->no_telp,
                            'from'   => 'SMP ASSALAM',
                            'text'   => 'Assalamauallaikum Bp/Ibu,'
                                        . $getNoTelp->wsiswa->name
                                        . 'kami ingin memberitahukan bahwa anda masih memiliki tunggakan sebesar'
            ]);
        }


    }
}
