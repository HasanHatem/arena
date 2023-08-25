<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $headerMenu = Menu::create([
            'name' => 'Header Menu',
            'slug' => 'header-menu'
        ]);

        MenuLink::create([
            'menu_id' => $headerMenu->id,
            'label' => 'Comparison',
            'url' => '#',
            'order' => '1'
        ]);
        MenuLink::create([
            'menu_id' => $headerMenu->id,
            'label' => 'Bond',
            'url' => '#',
            'order' => '2'
        ]);
        MenuLink::create([
            'menu_id' => $headerMenu->id,
            'label' => 'Testimonials',
            'url' => '#',
            'order' => '3'
        ]);
        MenuLink::create([
            'menu_id' => $headerMenu->id,
            'label' => 'Contact',
            'url' => '#',
            'order' => '1'
        ]);
    }
}
