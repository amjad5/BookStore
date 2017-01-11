<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product(['imgPath' => 'http://ecx.images-amazon.com/images/I/51C06593sWL._SX321_BO1,204,203,200_.jpg',
        'title' => 'Encyclopedia Brown', 'description' => 'Encyclopedia of the world in single book.' , 'price' => 10
            ]);
            $product->save();
            
            $product = new \App\Product(['imgPath' => 'http://mafialifeblog.com/wp-content/uploads/2011/10/51POjQpSxLL._SS500_.jpg', 
            'title' => 'The Mafia', 'description' => 'Book on the history of Mafia.', 'price' => 15
            ]);
            $product->save();
            
            $product = new \App\Product(['imgPath' => 'http://press.nationalgeographic.com/files/2014/10/Worlds-Best-Cities-Cover.jpg',
            'title' => 'World\'s Best Cities','description' => 'Best Travelogue by National Geographic.', 'price' => 20
            ]);
            $product->save();
            
            $product = new \App\Product(['imgPath' => 'http://thewebdesignersideabook.com/img/WDIB-600x600.jpg',
            'title' => 'The Web Designer\'s Idea Book', 'Description' => 'Perfect designing book for beginners.', 'price' => 12
            ]);
            $product->save();
            
            $product = new \App\Product(['imgPath' => 'http://press.nationalgeographic.com/files/2014/10/Worlds-Best-Cities-Cover.jpg',
            'title' => 'World\'s Best Cities', 'description' => 'Best Travelogue by National Geographic.', 'price' => 20
            ]);
            $product->save();
            
            $product = new \App\Product(['imgPath' => 'http://static.weloveshopping.com/shop/client/000051/kbforbooks/EDK001.jpg',
            'title' => 'Encyclopedia of Space', 'description' => 'Guide for space lovers.', 'price' => 17
            ]);
            $product->save();
    }
}