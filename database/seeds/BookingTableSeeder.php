<?php

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Booking::create([
                'customer_name' => 'Steve Rogers',
                'customer_location' => 'Bristol',
                'customer_address' => '50 Hagiwara Tea Garden Dr,Bristol, UK 94118',
                'customer_image'    => 'steve.jpeg'
            ]);

            Booking::create([
                'customer_name' => 'Tony Stark',
                'customer_location' => 'San Francisco',
                'customer_address' => '124 , BA214RT, Tea Garden Dr,San Francisco, CA 94118',
                'customer_image'    => 'tony.jpeg'
            ]);

            Booking::create([
                'customer_name' => 'Natasha Ramanoff',
                'customer_location' => 'Wakanda',
                'customer_address' => 'Wakanda Streat, Main Road, Wakanda',
                'customer_image'    => 'natasha.jpeg'
            ]);
        
    }
}
