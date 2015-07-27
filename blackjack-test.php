<?php
// complete all "todo"s to build a blackjack game
// create an array for suits
$suits = ['C', 'H', 'S', 'D'];
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

function buildDeck($suits, $cards)
{
	$deck = [];
	foreach($cards as $card){
		foreach($suits as $suit){
			$completeCard = "{$card}" . " " . "{$suit}";
			array_push($deck, $completeCard);
		}
	}
	return $deck;

}



print_r(buildDeck($suits, $cards));


