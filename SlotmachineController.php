<?php
 
namespace Controllers;
 
class SlotMachineController {
    public static function play() {
 
        header('Content-Type: application/json');
 
        $symbols_with_weights = [
            '🍋' => 40,
            '🍒' => 30,
            '⭐' => 15,
            '🔔' => 10,
            '💎' => 5,
        ];
 
       
        $paytable = [
            '🍋🍋🍋' => 40,
            '🍒🍒🍒' => 50,
            '⭐⭐⭐' => 100,
            '🔔🔔🔔' => 150,
            '💎💎💎' => 200,
        ];
 
        $reel1 = self::getRandomSymbol($symbols_with_weights);
        $reel2 = self::getRandomSymbol($symbols_with_weights);
        $reel3 = self::getRandomSymbol($symbols_with_weights);
 
        $combination = $reel1 . $reel2 . $reel3;
        $gain = isset($paytable[$combination]) ? $paytable[$combination] : 0;
 
       
        echo json_encode([
            'success' => true,
            'reels' => [$reel1, $reel2, $reel3],
            'gain' => $gain,
        ]);
    }
 
 
    private static function getRandomSymbol($weights) {
        $rand = mt_rand(1, array_sum($weights));
        foreach ($weights as $symbol => $weight) {
            if ($rand <= $weight) {
                return $symbol;
            }
            $rand -= $weight;
        }
        return null;
    }
}
 
