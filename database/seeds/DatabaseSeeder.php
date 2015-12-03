<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ProductTableSeeder');
    }
}
class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product')->insert([
            ['cate_id' => 1, 'brand_id' => 1, 'image_name' => '1.jpg', 'product_name' => 'Ao a1', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 1, 'discount' => 59000,'slug' => 'ao-a1', 'description' => 'lorem1hij,uhybygnjumjimuh'],
            ['cate_id' => 4, 'brand_id' => 2, 'image_name' => '2.jpg', 'product_name' => 'Ao a2', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 1, 'discount' => 59000,'slug' => 'ao-a2', 'description' => 'lorem1hij,uhybygnjumjimuh'],
            ['cate_id' => 6, 'brand_id' => 3, 'image_name' => '3.jpg', 'product_name' => 'Ao lot', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 1, 'discount' => 59000,'slug' => 'ao-a3', 'description' => 'loremhij,uhybygnjumjimuh'],
            ['cate_id' => 2, 'brand_id' => 1, 'image_name' => '4.jpg', 'product_name' => 'Ao lot', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 1, 'discount' => 59000,'slug' => 'ao-a4', 'description' => 'loremhij,uhybygnjumjimuh'],
            ['cate_id' => 5, 'brand_id' => 2, 'image_name' => '5.jpg', 'product_name' => 'Ao lot', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 1, 'discount' => 59000,'slug' => 'ao-a5', 'description' => 'loremhij,uhybygnjumjimuh'],
            ['cate_id' => 7, 'brand_id' => 3, 'image_name' => '6.jpg', 'product_name' => 'Ao lot', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 1, 'discount' => 59000,'slug' => 'ao-5', 'description' => 'loremhij,uhybygnjumjimuh'],
            ['cate_id' => 2, 'brand_id' => 1, 'image_name' => '7.jpg', 'product_name' => 'Ao lot', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 1, 'discount' => 59000,'slug' => 'ao-6', 'description' => 'loremhij,uhybygnjumjimuh'],
            ['cate_id' => 4, 'brand_id' => 2, 'image_name' => '8.jpg', 'product_name' => 'Ao lot', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 0, 'discount' => 59000,'slug' => 'ao-7', 'description' => 'loremhij,uhybygnjumjimuh'],
            ['cate_id' => 1, 'brand_id' => 3, 'image_name' => '9.jpg', 'product_name' => 'Ao lot', 'qty' => 69, 'price' => 69000, 'show' => 1, 'feature' => 0, 'discount' => 59000,'slug' => 'ao-8', 'description' => 'loremhij,uhybygnjumjimuh']

        ]);
        DB::table('color')->insert([
            ['color_name' => 'red', 'slug' => 'red'],
            ['color_name' => 'blue', 'slug' =>'blue'],
            ['color_name' => 'green', 'slug' =>'green']
        ]);
        DB::table('size')->insert([
            ['size_name' => 'XS', 'slug' => 'xs'],
            ['size_name' => 'S', 'slug' => 's'],
            ['size_name' => 'M', 'slug' => 'm'],
            ['size_name' => 'L', 'slug' => 'l'],
            ['size_name' => 'XL', 'slug' => 'xl'],
            ['size_name' => 'XXl', 'slug' => 'xxl'],
            ['size_name' => 'XXXL', 'slug' => 'xxxl'],
        ]);
        DB::table('product_color')->insert([
            ['product_id' => 1, 'color_id' => 1], ['product_id' => 1, 'color_id' => 2], ['product_id' => 1, 'color_id' => 3],
            ['product_id' => 2, 'color_id' => 1], ['product_id' => 2, 'color_id' => 2], ['product_id' => 2, 'color_id' => 3],
            ['product_id' => 3, 'color_id' => 1], ['product_id' => 3, 'color_id' => 2], ['product_id' => 3, 'color_id' => 3],
            ['product_id' => 4, 'color_id' => 1], ['product_id' => 4, 'color_id' => 2], ['product_id' => 4, 'color_id' => 3],
            ['product_id' => 5, 'color_id' => 1], ['product_id' => 5, 'color_id' => 2], ['product_id' => 5, 'color_id' => 3],
            ['product_id' => 6, 'color_id' => 1], ['product_id' => 6, 'color_id' => 2], ['product_id' => 6, 'color_id' => 3],
            ['product_id' => 7, 'color_id' => 1], ['product_id' => 7, 'color_id' => 2], ['product_id' => 7, 'color_id' => 3],
            ['product_id' => 8, 'color_id' => 1], ['product_id' => 8, 'color_id' => 2], ['product_id' => 8, 'color_id' => 3],
            ['product_id' => 9, 'color_id' => 1], ['product_id' => 9, 'color_id' => 2], ['product_id' => 9, 'color_id' => 3],
        ]);
        DB::table('product_size')->insert([
            ['product_id' => 1, 'size_id' => 1], ['product_id' => 1, 'size_id' => 2], ['product_id' => 1, 'size_id' => 3],
            ['product_id' => 2, 'size_id' => 1], ['product_id' => 2, 'size_id' => 2], ['product_id' => 2, 'size_id' => 3],
            ['product_id' => 3, 'size_id' => 1], ['product_id' => 3, 'size_id' => 2], ['product_id' => 3, 'size_id' => 3],
            ['product_id' => 4, 'size_id' => 1], ['product_id' => 4, 'size_id' => 2], ['product_id' => 4, 'size_id' => 3],
            ['product_id' => 5, 'size_id' => 1], ['product_id' => 5, 'size_id' => 2], ['product_id' => 5, 'size_id' => 3],
            ['product_id' => 6, 'size_id' => 1], ['product_id' => 6, 'size_id' => 2], ['product_id' => 6, 'size_id' => 3],
            ['product_id' => 7, 'size_id' => 1], ['product_id' => 7, 'size_id' => 2], ['product_id' => 7, 'size_id' => 3],
            ['product_id' => 8, 'size_id' => 1], ['product_id' => 8, 'size_id' => 2], ['product_id' => 8, 'size_id' => 3],
            ['product_id' => 9, 'size_id' => 1], ['product_id' => 9, 'size_id' => 2], ['product_id' => 9, 'size_id' => 3],
        ]);
        DB::table('category')->insert([
            ['cate_name' => 'women', 'parent_id' => 0, 'oder' => 1, 'slug' => 'women'],
            ['cate_name' => 'men', 'parent_id' => 0, 'oder' => 2, 'slug' => 'men'],
            ['cate_name' => 'shoes', 'parent_id' => 0, 'oder' => 3, 'slug' => 'shoes'],
            ['cate_name' => 'sweaters', 'parent_id' => 1, 'oder' => 4, 'slug' => 'sweaters'],
            ['cate_name' => 'shorts', 'parent_id' => 2, 'oder' => 5, 'slug' => 'shorts'],
            ['cate_name' => 'denim', 'parent_id' => 1, 'oder' => 6, 'slug' => 'denim'],
            ['cate_name' => 'pants', 'parent_id' => 2, 'oder' => 7, 'slug' => 'pants']
        ]);
        DB::table('brand')->insert([
            ['brand_name' => 'NEM', 'slug' => 'nem'],
            ['brand_name' => 'LACOSE', 'slug' => 'lacose'],
            ['brand_name' => 'Li-Ning', 'slug' => 'li-ning'],
        ]);
        DB::table('category_brand')->insert([
            ['brand_id' => 1, 'category_id' => 1],
            ['brand_id' => 1, 'category_id' => 3],
            ['brand_id' => 2, 'category_id' => 1],
            ['brand_id' => 2, 'category_id' => 2],
            ['brand_id' => 2, 'category_id' => 3],
            ['brand_id' => 2, 'category_id' => 4],
            ['brand_id' => 2, 'category_id' => 5],
            ['brand_id' => 3, 'category_id' => 1],
            ['brand_id' => 3, 'category_id' => 2],
            ['brand_id' => 3, 'category_id' => 4],
        ]);
        DB::table('image')->insert([
            ['product_id' => 1, 'image_name' => '1.jpg'],
            ['product_id' => 1, 'image_name' => '1_2.jpg'],
            ['product_id' => 1, 'image_name' => '1_3.jpg'],
            ['product_id' => 1, 'image_name' => '1_4.jpg'],
            ['product_id' => 2, 'image_name' => '2.jpg'],
            ['product_id' => 2, 'image_name' => '2_2.jpg'],
            ['product_id' => 3, 'image_name' => '3.jpg'],
            ['product_id' => 3, 'image_name' => '3_2.jpg'],
            ['product_id' => 4, 'image_name' => '4.jpg'],
            ['product_id' => 4, 'image_name' => '4_2.jpg'],
            ['product_id' => 5, 'image_name' => '5.jpg'],
            ['product_id' => 5, 'image_name' => '5_2.jpg'],
            ['product_id' => 6, 'image_name' => '6.jpg'],
            ['product_id' => 6, 'image_name' => '6_2.jpg'],
            ['product_id' => 7, 'image_name' => '7.jpg'],
            ['product_id' => 7, 'image_name' => '7_2.jpg'],
            ['product_id' => 8, 'image_name' => '8.jpg'],
            ['product_id' => 8, 'image_name' => '8_2.jpg'],
            ['product_id' => 9, 'image_name' => '9.jpg'],
            ['product_id' => 9, 'image_name' => '9_2.jpg']
        ]);
    }
}


