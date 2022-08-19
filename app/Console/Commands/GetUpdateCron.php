<?php

namespace App\Console\Commands;

use App\Events\CurrencyUpdatedEvent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use JsonException;

class GetUpdateCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:updates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     *
     * @throws JsonException
     */
    public function handle(): void
    {
        $res = Http::get('https://api.monobank.ua/bank/currency');
        $res = json_decode($res->body(), true, 512, JSON_THROW_ON_ERROR);

        event(new CurrencyUpdatedEvent($res));
    }
}
