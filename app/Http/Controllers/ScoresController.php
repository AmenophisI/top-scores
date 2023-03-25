<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
    public function registScore($data)
    {
        for ($i = 0; $i < 20; $i++) {
            $player = new player;
            $player->name = $data["response"][$i]['player']['name'];
            $player->league = $data["response"][$i]['statistics'][0]["league"]["name"];
            $player->team = $data["response"][$i]['statistics'][0]['team']['name'];
            $player->goals = $data["response"][$i]['statistics'][0]['goals']['total'];
            // Player::where('league', '=', $player->league)->delete();
            $player->save();
        }
    }

    public function getHeader()
    {
        $apiKey = env('API_KEY');
        $headers = ["x-rapidapi-host:v3.football.api-sports.io", "x-rapidapi-key:{$apiKey}"];
        $option = array(
            'http' => array(
                'method' => 'GET',
                'header' => $headers
            )
        );
        return $option;
    }

    public function getWc()
    {
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=1";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
    public function getCl()
    {
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=2";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
    public function getEl()
    {
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=3";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
    public function getPremire()
    {
        Player::where('league', '=', 'Premier League')->delete();
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=39";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
    public function getLiga()
    {
        Player::where('league', '=', 'La Liga')->delete();
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=140";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
    public function getOne()
    {
        Player::where('league', '=', 'Ligue 1')->delete();
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=41";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
    public function getBundes()
    {
        Player::where('league', '=', 'Bundesliga')->delete();
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=78";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
    public function getSerie()
    {
        Player::where('league', '=', 'Serie A')->delete();
        $option = $this->getHeader();
        $url = "https://v3.football.api-sports.io/players/topscorers?season=2022&league=135";
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        $this->registScore($data);
    }
}
