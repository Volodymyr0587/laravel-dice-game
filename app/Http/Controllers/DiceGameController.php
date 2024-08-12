<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DiceGameController extends Controller
{
    public function index()
    {
        return view('dice-game.index', [
            'currentPoints' => Session::get('currentPoints', 0),
            'message' => Session::get('message', null)
        ]);
    }

    public function roll(Request $request)
    {
        $diceRolls = [];
        for ($i = 0; $i < 5; $i++) {
            $diceRolls[] = rand(1, 6);
        }

        $score = $this->calculateScore($diceRolls);
        $currentPoints = Session::get('currentPoints', 0);

        if ($score > 0) {
            $currentPoints += $score;
            if ($currentPoints >= 1000) {
                Session::put('message', "Congratulations! You won! Total score: $currentPoints");
                $currentPoints = 0;
            } else {
                Session::put('message', null);
            }
        } else {
            $currentPoints = 0; // Reset points if no score
            Session::put('message', 'You lost. Try again.');
        }

        Session::put('currentPoints', $currentPoints);

        $diceImages = array_map(function ($roll) {
            return 'storage/dice/dice-six-faces-' . $roll . '.png';
        }, $diceRolls);

        return view('dice-game.index', [
            'diceRolls' => $diceRolls,
            'diceImages' => $diceImages,
            'score' => $score,
            'currentPoints' => $currentPoints,
            'message' => Session::get('message', null)
        ]);
    }

    private function calculateScore($diceRolls)
    {
        sort($diceRolls);
        $counts = array_count_values($diceRolls);
        $score = 0;

        if ($diceRolls == [1, 2, 3, 4, 5]) {
            $score += 150;
        } elseif ($diceRolls == [2, 3, 4, 5, 6]) {
            $score += 250;
        } else {
            foreach ($counts as $num => $count) {
                switch ($num) {
                    case 1:
                        if ($count == 1) $score += 10;
                        if ($count == 2) $score += 20;
                        if ($count == 3) $score += 100;
                        if ($count == 4) $score += 200;
                        if ($count == 5) $score += 1000;
                        break;
                    case 2:
                        if ($count == 3) $score += 20;
                        if ($count == 4) $score += 40;
                        if ($count == 5) $score += 200;
                        break;
                    case 3:
                        if ($count == 3) $score += 30;
                        if ($count == 4) $score += 60;
                        if ($count == 5) $score += 300;
                        break;
                    case 4:
                        if ($count == 3) $score += 40;
                        if ($count == 4) $score += 80;
                        if ($count == 5) $score += 400;
                        break;
                    case 5:
                        if ($count == 1) $score += 5;
                        if ($count == 2) $score += 10;
                        if ($count == 3) $score += 50;
                        if ($count == 4) $score += 100;
                        if ($count == 5) $score += 500;
                        break;
                    case 6:
                        if ($count == 3) $score += 60;
                        if ($count == 4) $score += 120;
                        if ($count == 5) $score += 600;
                        break;
                }
            }
        }

        return $score;
    }
}

