<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = [
            [
                'page' => 'landing-page',
                'type' => 'image',
                'identifier' => 'hero_slider_image_1',
                'content' => 'uploads/images/home/1.png',
            ],
            [
                'page' => 'landing-page',
                'type' => 'image',
                'identifier' => 'hero_slider_image_2',
                'content' => 'uploads/images/home/2.png',
            ],
            [
                'page' => 'landing-page',
                'type' => 'image',
                'identifier' => 'hero_slider_image_3',
                'content' => 'uploads/images/home/3.png',
            ],
            [
                'page' => 'landing-page',
                'type' => 'image',
                'identifier' => 'hero_slider_image_4',
                'content' => 'uploads/images/home/4.png',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'title',
                'content' => 'Fixed Rate Bonds With Risk-Free Guranteed Returns',
            ],
            [
                'page' => 'landing-page',
                'type' => 'textarea',
                'identifier' => 'description',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'main_cta_text',
                'content' => 'Fill Out a Questionnaire',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'main_cta_url',
                'content' => '#contact',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'properties_sub_title',
                'content' => 'Book Now',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'properties_title',
                'content' => 'Our Properties',
            ],
            [
                'page' => 'landing-page',
                'type' => 'textarea',
                'identifier' => 'properties_first_description',
                'content' => 'Choose from our spectacular range of iconic properties in Dubai starting from AED 1,000,000 only.',
            ],
            [
                'page' => 'landing-page',
                'type' => 'textarea',
                'identifier' => 'properties_second_description',
                'content' => '20% Guaranteed Rental Income Per Annum*',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'properties_cta',
                'content' => 'Enquire Now',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'properties_load_more',
                'content' => 'Load More',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'contact_sub_title',
                'content' => 'Get in Touch',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'contact_title',
                'content' => 'Interested To Know More?',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'form_name',
                'content' => 'Name',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'form_email',
                'content' => 'Email',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'form_mobile_number',
                'content' => 'Mobile Number',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'form_investment_amount',
                'content' => 'Investment Amount',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'form_message',
                'content' => 'Message',
            ],
            [
                'page' => 'landing-page',
                'type' => 'text',
                'identifier' => 'contact_cta',
                'content' => 'Submit',
            ],
        ];

        foreach ($content as $arr) {
            Content::create($arr);
        }
    }
}
