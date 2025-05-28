<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name' => 'Book1',
                'author' => 'Author Name1',
                'image' => 'https://www.chirags.in/archive/images/logo.png',
                'price' => 199
            ],
            [
                'name' => 'Book2',
                'author' => 'Author Name2',
                'image' => 'https://www.chirags.in/archive/images/logo.png',
                'price' => 299
            ],
            [
                'name' => 'Book3',
                'author' => 'Author Name3',
                'image' => 'https://www.chirags.in/archive/images/logo.png',
                'price' => 399
            ]
        ];
        foreach ($books as $key => $value) {
            Book::create($value);
        }
    }
}
