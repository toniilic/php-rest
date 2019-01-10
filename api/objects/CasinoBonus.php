<?php
class Product{


array/*:7 [
"title" => "$10 No Deposit Bonus at Jumba Bet Casino"
"url" => "https://www.thebigfreechiplist.com/155503/10-No-Deposit-Bonus-at-Jumba-Bet-Casino/"
"bonus_codes" => array:2 [
0 => "A83J6K"
1 => "A857CW"
]
"bonus_types" => array:2 [
0 => "No Deposit Bonus"
1 => "New players and account holders"
]
"valid_until" => "2019-01-09"
"games_allowed" => array:8 [
0 => "Bingo"
1 => "Blackjack"
2 => "Craps"
3 => "Keno"
4 => "Roulette"
5 => "Scratch Cards"
6 => "Slots"
7 => "Video Poker"
]
"wagering" => "99xB"
]*/


    // database connection and table name
    private $conn;
    private $table_name = "products";

    // object properties
    public $id;
    public $title;
    public $url;
    public $bonus_codes;
    public $bonus_types;
    public $valid_until;
    public $games_allowed;
    public $wagering;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

}