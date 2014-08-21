<?php

class PopularTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('popular')->truncate();

        \DB::table('popular')->insert(array (
            0 =>
            array (
                'id' => 1,
                'first_name' => 'Michael',
                'last_name' => 'Jackson',
                'born' => 1958,
                'died' => 2009,
                'created_at' => '2014-08-22 01:56:22',
                'updated_at' => '2014-08-22 01:56:22',
            ),
            1 =>
            array (
                'id' => 2,
                'first_name' => 'Albert',
                'last_name' => 'Einstein',
                'born' => 1879,
                'died' => 1955,
                'created_at' => '2014-08-22 01:56:41',
                'updated_at' => '2014-08-22 01:56:41',
            ),
            2 =>
            array (
                'id' => 3,
                'first_name' => 'Isaac',
                'last_name' => 'Newton',
                'born' => 1643,
                'died' => 1727,
                'created_at' => '2014-08-22 01:57:07',
                'updated_at' => '2014-08-22 01:57:07',
            ),
            3 =>
            array (
                'id' => 4,
                'first_name' => 'Thomas',
                'last_name' => 'Edison',
                'born' => 1847,
                'died' => 1931,
                'created_at' => '2014-08-22 02:14:00',
                'updated_at' => '2014-08-22 02:14:00',
            ),
            4 =>
            array (
                'id' => 5,
                'first_name' => 'Galileo',
                'last_name' => 'Galilei',
                'born' => 1564,
                'died' => 1642,
                'created_at' => '2014-08-22 02:14:15',
                'updated_at' => '2014-08-22 02:14:15',
            ),
            5 =>
            array (
                'id' => 6,
                'first_name' => 'Charles',
                'last_name' => 'Darwin',
                'born' => 1809,
                'died' => 1882,
                'created_at' => '2014-08-22 02:14:33',
                'updated_at' => '2014-08-22 02:14:33',
            ),
            6 =>
            array (
                'id' => 7,
                'first_name' => 'Leonardo',
                'last_name' => 'da Vinci',
                'born' => 1452,
                'died' => 1519,
                'created_at' => '2014-08-22 02:14:53',
                'updated_at' => '2014-08-22 02:14:53',
            ),
            7 =>
            array (
                'id' => 8,
                'first_name' => 'Sigmund',
                'last_name' => 'Freud',
                'born' => 1856,
                'died' => 1939,
                'created_at' => '2014-08-22 02:15:18',
                'updated_at' => '2014-08-22 02:15:18',
            ),
            8 =>
            array (
                'id' => 9,
                'first_name' => 'Benjamin',
                'last_name' => 'Franklin',
                'born' => 1706,
                'died' => 1790,
                'created_at' => '2014-08-22 02:15:34',
                'updated_at' => '2014-08-22 02:15:34',
            ),
        ));
    }

}
