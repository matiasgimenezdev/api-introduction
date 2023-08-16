<?php


use Phinx\Seed\AbstractSeed;

class MovieSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 50; $i++) {
            $data[] = [
                'name' => $faker->words(5, true),
                'year' => $faker->year($max = 'now'),
                'director' => $faker->name(),
                'summary' => $faker->text(350)
            ];
        };
        $this->table('movies')->insert($data)->save();
    }
}
