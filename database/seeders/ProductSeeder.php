<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Barenbliss Makes Perfect Lip Tint', 'slug'=>'lipstick-1', 'category_id'=> '3', 'price'=> 'Rp69.000', 'description' => 'Lip tint beraroma buah persik berteksur gel ringan yang melapisi bibir dengan 6 kandungan kebaikan alami untuk tampilan bibir yang segar dan lembap.', 'image'=> 'products-images/lip-1.jpg'],
            ['name' => 'Hanasui Tintdorable Lip Stain', 'slug'=>'lipstick-2', 'category_id'=> '3', 'price'=> 'Rp20.000', 'description' => 'Hanasui Tintdorable Lip Stain adalah lip tint dengan tekstur aqua jelly yang ringan, membuat bibir tampak cerah alami, tetap lembap dan warna yang tahan lama.', 'image'=> 'products-images/lip-2.jpg'],
            ['name' => 'Emina Glossy Stain', 'slug'=>'lipstick-3', 'category_id'=> '3', 'price'=> 'Rp45.000', 'description' => 'Lip stain menghasilkan tampilan glossy pada bibir Diformulasikan dengan ultra-moisturizing recipes sehingga dapat menjaga kelembaban bibir dan nyaman digunakan seharian.', 'image'=> 'products-images/lip-3.jpg'],
            ['name' => 'DAZZLE ME Ink-Licious Lip Tint', 'slug'=>'lipstick-4', 'category_id'=> '3', 'price'=> 'Rp16.000', 'description' => 'Dengan special water-based formula yang ringan dan berpigmentasi tinggi, sempurna dalam 1x aplikasi mudah dan nyaman dipakai setiap hari.', 'image'=> 'products-images/lip-4.jpg'],
            ['name' => 'Pinkflash Lip Gloss', 'slug'=>'lipstick-5', 'category_id'=> '3', 'price'=> 'Rp16.000', 'description' =>'Lip Gloss diformulasikan dengan minyak nabati alami sehingga dapat menutrisi serta memberikan bibir dengan kelembaban yang tahan lama.', 'image'=> 'products-images/lip-5.jpg'],
            ['name' => 'Pinkflash Lasting Matte Lip Cream', 'slug'=>'lipstick-6', 'category_id'=> '3', 'price'=> 'Rp15.000', 'description' => 'Lipstik matte cair pigmentasi tinggi ini sangat halus. Anti air dan tidak mudah menempel pada permukaan lain. Dilengkapi dengan Vitamin E yang melembabkan kulit pada bibir.', 'image'=> 'products-images/lip-6.jpg'],
            ['name' => 'LANEIGE CUSHION NEO MATTE', 'slug'=>'cushion-1', 'category_id'=> '2', 'price'=> ' Rp590.000', 'description' => 'Cushion Transformation, Now in Your Hands! Full coverage cushion yang memberikan flawless complexion selama 24 jam dengan satu sentuhan.', 'image'=> 'products-images/cushion-1.jpg'],
            ['name' => 'BARENBLISS TRUE BEAUTY INSIDE CUSHION', 'slug'=>'cushion-2', 'category_id'=> '2', 'price'=> 'Rp159.000', 'description' => 'Cushion dengan coverage tinggi yang diperkaya dengan Miracle Bloom™ Essence menghasilkan tampilan flawless-matte hingga 24 jam, mudah retouch di manapun.', 'image'=> 'products-images/cushion-2.jpg'],
            ['name' => 'ROM&ND BARE WATER CUSHION', 'slug'=>'cushion-3', 'category_id'=> '2', 'price'=> 'Rp260.000', 'description' => 'Rom&nd Bare Water Cushion adalah bantalan ringan yang membuat kulit tampak berembun dan penuh kelembapan. Secara instan mengembalikan kelembapan yang cukup.', 'image'=> 'products-images/cushion-3.jpg'],
            ['name' => 'CUSHION SOMETHINC BREATHABLE COPY PASTE', 'slug'=>'cushion-4', 'category_id'=> '2', 'price'=> ' Rp180.000', 'description' => 'Dengan teknologi yang membuat kulitmu dapat bernafas, Sertifikasi Non-Comedogenic, ketahanan yang sangat lama, & kandungan skincare baik lainnya.', 'image'=> 'products-images/cushion-4.jpg'],
            ['name' => 'LUXCRIME 2nd SECOND SKIN CUSHION', 'slug'=>'cushion-5', 'category_id'=> '2', 'price'=> ' Rp98.000', 'description' => 'Second Skin Luminous Cushion mengubah warna kulit Anda. Memberikan cakupan yang dapat dibangun, hasil akhir yang tahan lama dan ringan. ', 'image'=> 'products-images/cushion-5.jpg'],
            ['name' => 'YOU Noutriwear+ Flawless Cushion Foundation C304 Pink Nude', 'slug'=>'cushion-6', 'category_id'=> '2', 'price'=> 'Rp135.000', 'description' => 'YOU NoutriWear+ Flawless Cushion Foundation adalah cushion foundation yang membantu menutrisi kulit.', 'image'=> 'products-images/cushion-6.jpg'],
            ['name' => 'PINKFLASH PRO TOUCH EYE SHADOW Palette 12 Colors', 'slug'=>'eyeshadow-1', 'category_id'=> '1', 'price'=> 'Rp47.000', 'description' => 'Pink dessert time, 2 palettes to choose!', 'image'=> 'products-images/eyeshadow-1.jpg'],
            ['name' => 'Esqa The Goddess Eyeshadow Palette', 'slug'=>'eyeshadow-2', 'category_id'=> '1', 'price'=> 'Rp195.000', 'description' => 'The Goddess Eyeshadow Palette menangkap warna sehari-hari yang memikat dengan 9 bayangan berpigmen dalam empat warna.', 'image'=> 'products-images/eyeshadow-2.jpg'],
            ['name' => 'Implora Eyeshadow Palette 7669D', 'slug'=>'eyeshadow-3', 'category_id'=> '1', 'price'=> 'Rp22.000', 'description' => 'Implora eyeshadow palette memiliki tekstur lembut yang menyatu ke dalam kulit dan tahan sepanjang hari.', 'image'=> 'products-images/eyeshadow-3.jpg'],
            ['name' => 'Pinkflash Eyeshadow Palette', 'slug'=>'eyeshadow-4', 'category_id'=> '1', 'price'=> 'Rp33.000', 'description' => 'Eyeshadow Palette terbaru dari PINKFLASH bertema permainan warna.', 'image'=> 'products-images/eyeshadow-4.jpg'],
            ['name' => 'WARDAH Exclusive Eyeshadow Palette', 'slug'=>'eyeshadow-5', 'category_id'=> '1', 'price'=> 'Rp85.000', 'description' => 'Eyeshadow Pallate dengan 8 warna yang intense dan tahan lama.', 'image'=> 'products-images/eyeshadow-5.jpg'],
            ['name' => 'Somethinc The Marionette Eyeshadow Palette', 'slug'=>'eyeshadow-6', 'category_id'=> '1', 'price'=> 'Rp114.000', 'description' => 'Tunjukkan personality-mu dengan 12 eyeshadow ultra-pigmented yang super halus.', 'image'=> 'products-images/eyeshadow-6.jpg'],
        ];
        DB::table('products')->insert($data);        
    }
}
