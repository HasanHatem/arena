<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings\GeneralSettings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('admin.settings.edit');
    }

    public function update(Request $request, GeneralSettings $settings)
    {
        $request->validate([
            'site_name' => ['required', 'string', 'max:250'],
            'email' => ['required', 'email', 'string', 'max:250'],
            'mobile_number' => ['required', 'string', 'max:250'],
            'logo' => ['nullable', 'image', 'max:2048']
        ]);

        $settings->name = $request->site_name;
        $settings->email = $request->email;
        $settings->mobile_number = $request->mobile_number;

        if ($request->hasFile('logo')) {
            $path = $request->logo->store('uploads/images', 'public');
            $settings->logo = $path;
        }

        if ($settings->save()) {
            return redirect()->back()->with('success', 'Settings has been modified successfully.');
        }

        return redirect()->back()->with('danger', 'There was a problem, please try again later.');
    }
}
