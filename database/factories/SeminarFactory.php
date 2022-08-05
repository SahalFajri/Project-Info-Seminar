<?php
// 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>'

namespace Database\Factories;

use App\Models\Seminar;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeminarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seminar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(1),
            'seminar_date' => $this->faker->date(),
            'seminar_time' => $this->faker->time(),
            'link' => 'https://forms.gle/z8d8bwN4APjzGn6j7',
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode('')
        ];
    }
}
