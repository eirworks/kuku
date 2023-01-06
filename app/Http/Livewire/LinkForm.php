<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Hidehalo\Nanoid\Client;
use Livewire\Component;

class LinkForm extends Component
{
    public $result = "";
    public $longUrl = "";
    public $link = null;

    public function getShortUrl() {
        if (!$this->longUrl) {
            $this->link =  null;
            return;
        }
        $client = new Client();

        $link = new Link();
        $link->url = $this->longUrl;
        $link->uid = $client->generateId($size=6);
        $link->save();
        $this->link = $link->toArray();

        $this->result = $link->uid;
    }

    public function render()
    {
        return view('livewire.link-form');
    }
}
