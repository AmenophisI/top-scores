<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoresController extends Controller
{
    public function registScore(Request $request)
    {
        $data = $this->getScore();
        $name = $data["response"][0]['player']['name'];
        $team = $data["response"][0]['statistics'][0]['team']['name'];
        $score = $data["response"][0]['statistics'][0]['goals']['total'];
    }

    public function getScore()
    {
        $url = 'https://v3.football.api-sports.io/players/topscorers?season=2022&league=2';
        $headers = ["x-rapidapi-host:v3.football.api-sports.io", "x-rapidapi-key:b9e7254313419981dac9803e4f50e60f"];
        $option = array(
            'http' => array(
                'method' => 'GET',
                'header' => $headers
            )
        );
        $context = stream_context_create($option);
        $raw_data = file_get_contents($url, false, $context);
        $data = json_decode($raw_data, true);
        return $data;
    }
}
