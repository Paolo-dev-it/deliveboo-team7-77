<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            // [
            //     'name'       =>  'McDonald',
            //     'email'      =>  'mcdonald@libero.it',
            //     'password'   =>   Hash::make('mcdonald'),
            //     'address'    =>   $faker->address(),
            //     'PIVA'       =>   $faker->randomNumber(9, true),
            //     'image_logo' =>   'https://picsum.photos/id/'. rand(0, 1000) .'/500/400',
            // ],
            // [
            //     'name'       =>  'BurgerKing',
            //     'email'      =>  'burgerking@libero.it',
            //     'password'   =>   Hash::make('BurgerKing'),
            //     'address'    =>   $faker->address(),
            //     'PIVA'       =>   $faker->randomNumber(9, true),
            //     'image_logo' =>   'https://picsum.photos/id/'. rand(0, 1000) .'/500/400',
            // ],
            // [
            //     'name'       =>  'Kfc',
            //     'email'      =>  'kfc@libero.it',
            //     'password'   =>   Hash::make('Kfc'),
            //     'address'    =>   $faker->address(),
            //     'PIVA'       =>   $faker->randomNumber(9, true),
            //     'image_logo' =>   'https://picsum.photos/id/'. rand(0, 1000) .'/500/400',
            // ],
            [
                "name" => "O'Pizzaiuolo",
                "email" => "pizzaiuolo@live.it",
                "password" => Hash::make('pizzaiuolo'),
                "address" => 'Via Toledo, 8 - Napoli',
                "PIVA" => '12548951657',
                "image_logo" => 'images/restaurants/pizzaiuolo.jpg',
                "type_id" => [
                    1,
                    2,
                    7,
                    8
                ]
            ],
            [
                "name" => "Pizzeria da Ciro",
                "email" => "daciro@live.it",
                "password" => Hash::make('daciro10'),
                "address" => 'Via Napoli, 8 - Napoli',
                "PIVA" => '15548956657',
                "description" => 'La pizza più buona di Napoli',
                "image_logo" => 'images/restaurants/daciro.jpg',
                "type_id" => [
                    1,
                    2,
                    7,
                    8
                ]
            ],
            [
                "name" => "Hokkaido",
                "email" => "hokkaido@gmail.com",
                "password" => Hash::make('Hokkaido189'),
                "address" => 'Piazza Giuseppe Verdi, 15 - Napoli',
                "PIVA" => '85416378925',
                "description" => 'Barche di sushi e tempura, anche nella formula all you can eat, in locale con cucina a vista e arredi minimal.',
                "image_logo" => 'images/restaurants/hokkaido.jpg',
                "type_id" => [
                    4,
                    7,
                ]
            ],
            [
                "name" => "Streat Piombo",
                "email" => "piombostrt@gmail.com",
                "password" => Hash::make('piombo00'),
                "address" => 'Via Sebastiano del Piombo, 12, Napoli',
                "PIVA" => '69542031025',
                "description" => 'Ristorante Americano, con una vasta gamma di piatti, da tutte le epoche.',
                "image_logo" => 'images/restaurants/piombo.jpg',
                "type_id" => [
                    11,
                    7,
                    8
                ]
            ],
            [
                "name" => "Gluten Free",
                "email" => "glutenfree@live.it",
                "password" => Hash::make('glutenfree'),
                "address" => 'Via Milano, 8 - Napoli',
                "PIVA" => '15587956887',
                "description" => 'Il cibo gluten free più buono di tutti',
                "image_logo" => 'images/restaurants/gluten.jpg',
                "type_id" => [
                    10,
                ]
            ],
            [
                "name" => "Hang Zhou",
                "email" => "zhou@live.it",
                "password" => Hash::make('zuzu0000'),
                "address" => 'Via Principe Eugenio, 82, Napoli',
                "PIVA" => '10000568487',
                "description" => "Specialità cinesi servite in porzioni abbondanti e abbellite da decorazioni di verdure.",
                "image_logo" => 'images/restaurants/zhou.jpg',
                "type_id" => [
                    3,
                    8,
                    7,

                ]
            ],
            [
                "name" => "Hachi Ristorante Giapponese",
                "email" => "hachi@gmail.com",
                "password" => Hash::make('hachi000'),
                "address" => 'Via Luca Giordano 33, Napoli ',
                "PIVA" => '95100236654',
                "description" => 'Ristorante giapponese',
                "image_logo" => 'images/restaurants/hachi.jpg',
                "type_id" => [
                    4,
                    7,
                ]
            ],
            [
                "name" => "La Scimmietta",
                "email" => "lascimmia@live.it",
                "password" => Hash::make('scimmietta11'),
                "address" => 'Via Giovanni Amendola, 176/178, Napoli',
                "PIVA" => '10855688879',
                "description" => "Semifreddi, gelati artigianali e gusti originali serviti in un ambiente dal clima allegro e pareti colorate.",
                "image_logo" => 'images/restaurants/scimmietta.jpg',
                "type_id" => [
                    13,
                    12,
                ]
            ],
            [
                "name" => "Poke House",
                "email" => "pokehouse@live.it",
                "password" => Hash::make('pokehouse'),
                "address" => 'Via Aurno, 8 - Napoli',
                "PIVA" => '78855689979',
                "description" => 'Che pokè!',
                "image_logo" => 'images/restaurants/pokehouse.jpg',
                "type_id" => [
                    14,

                ]
            ],
            [
                "name" => "Cavoli Nostri",
                "email" => "nostricavoli@gmail.com",
                "password" => Hash::make('cavolituoi'),
                "address" => 'Via Palepoli, 32, Napoli ',
                "PIVA" => '46006998521',
                "description" => 'Niente carne e pesce, solo cavoli.',
                "image_logo" => 'images/restaurants/cavolinostri.jpg',
            ],
            [
                "name" => "Shabnaz",
                "email" => "shabnaz@gmail.com",
                "password" => Hash::make('shaby00'),
                "address" => 'Via Liborio Romano, 19, Napoli',
                "PIVA" => '87624159320',
                "description" => "Shabnaz l'indiano più famoso di tutti i tempi di Lecce",
                "image_logo" => 'images/restaurants/shabnaz.jpg',
            ],
            [
                "name" => "The Mexican",
                "email" => "mexican@live.it",
                "password" => Hash::make('mexican'),
                "address" => 'Via Palermo, 8 - Napoli',
                "PIVA" => '78858887979',
                "description" => 'Tacos e tortillas',
                "image_logo" => 'images/restaurants/themexican.jpg',
            ],
        ];

        foreach ($restaurants as $restaurant) {

            $objUser = new User;
            $objUser->name        = $restaurant['name'];
            $objUser->email       = $restaurant['email'];
            $objUser->password    = $restaurant['password'];
            $objUser->address     = $restaurant['address'];
            $objUser->PIVA        = $restaurant['PIVA'];
            $objUser->image_logo  = $restaurant['image_logo'];
            $objUser->save();
        }
    }
}
