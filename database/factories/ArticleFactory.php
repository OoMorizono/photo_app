<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Node\Block\Paragraph;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // fakerを使ってデータを生成
            'caption' => $this->faker->word(),
            'info' => $this->faker->paragraph(),
            'user_id' => \App\Models\User::factory()->create(),
        ];
    }
}
