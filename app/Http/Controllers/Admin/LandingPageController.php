<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function edit()
    {
        $content = Content::get();

        return view('admin.content.edit', compact('content'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'hero_slider_image_1' => ['nullable', 'image', 'max:2048'],
            'hero_slider_image_2' => ['nullable', 'image', 'max:2048'],
            'hero_slider_image_3' => ['nullable', 'image', 'max:2048'],
            'hero_slider_image_4' => ['nullable', 'image', 'max:2048'],
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'main_cta_text' => ['required', 'string'],
            'main_cta_url' => ['required', 'string'],
            'properties_sub_title' => ['required', 'string'],
            'properties_title' => ['required', 'string'],
            'properties_first_description' => ['required', 'string'],
            'properties_second_description' => ['required', 'string'],
            'properties_cta' => ['required', 'string'],
            'properties_load_more' => ['required', 'string'],
            'contact_sub_title' => ['required', 'string'],
            'contact_title' => ['required', 'string'],
            'form_name' => ['required', 'string'],
            'form_email' => ['required', 'string'],
            'form_mobile_number' => ['required', 'string'],
            'form_investment_amount' => ['required', 'string'],
            'form_message' => ['required', 'string'],
            'contact_cta' => ['required', 'string'],
        ]);

        if ($request->hasFile('hero_slider_image_1')) {
            $path = $request->hero_slider_image_1->store('uploads/images/home', 'public');
            $data['hero_slider_image_1'] = $path;
        }

        if ($request->hasFile('hero_slider_image_2')) {
            $path = $request->hero_slider_image_2->store('uploads/images/home', 'public');
            $data['hero_slider_image_2'] = $path;
        }

        if ($request->hasFile('hero_slider_image_3')) {
            $path = $request->hero_slider_image_3->store('uploads/images/home', 'public');
            $data['hero_slider_image_3'] = $path;
        }

        if ($request->hasFile('hero_slider_image_4')) {
            $path = $request->hero_slider_image_4->store('uploads/images/home', 'public');
            $data['hero_slider_image_4'] = $path;
        }

        // Update the content
        foreach ($data as $identifier => $value) {
            Content::where('page', 'landing-page')
                ->where('identifier', $identifier)
                ->update(['content' => $value]);
        }

        return redirect()->back()
            ->with('success', 'Content updated successfully');
    }
}
