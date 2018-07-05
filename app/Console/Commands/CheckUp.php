<?php

namespace App\Console\Commands;

use App\Events\SiteEvent;
use App\Website;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class CheckUp extends Command
{
    private $guzzle;

    public function __construct(Client $guzzle)
    {
        parent::__construct();

        $this->guzzle = $guzzle;
    }

    protected $signature = 'check:up';
    protected $description = 'Check websites if they are up or down';

    public function handle()
    {
        Website::all()->each([$this, 'checkStatus']);
    }

    public function checkStatus(Website $website)
    {
        $response = $this->guzzle->get($website->url, ['http_errors' => false]);
        $status = $response->getStatusCode();

        if ($status >= 300) {
            $title = "{$website->name} is down";
            $description = "Checked URL {$website->url} returned a HTTP {$status} response";

            event(new SiteEvent($title, $description, 1));
        }
    }
}
