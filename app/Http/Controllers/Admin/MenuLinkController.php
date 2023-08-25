<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuLink;
use Illuminate\Http\Request;

class MenuLinkController extends Controller
{
    public $headerMenu;

    public function __construct()
    {
        $this->headerMenu = Menu::where('slug', 'header-menu')->first();
    }

    public function index()
    {
        $links = MenuLink::where('menu_id', $this->headerMenu->id)->orderBy('order')->paginate(10);

        return view('admin.links.index', compact('links'));
    }

    public function create()
    {
        return view('admin.links.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'label' => ['required', 'string', 'max:250'],
            'url' => ['required', 'string', 'max:250'],
            'order' => ['required', 'numeric', 'min:1'],
        ]);

        $data['menu_id'] = $this->headerMenu->id;

        if (MenuLink::create($data)) {
            return redirect()->route('admin.links.index')->with('success', 'Menu link created successfully.');
        }
    }

    public function edit(MenuLink $link)
    {
        return view('admin.links.edit', compact('link'));
    }

    public function update(Request $request, MenuLink $link)
    {
        $data = $request->validate([
            'label' => ['required', 'string', 'max:250'],
            'url' => ['required', 'string', 'max:250'],
            'order' => ['required', 'numeric', 'min:1'],
        ]);

        if ($link->update($data)) {
            return redirect()->route('admin.links.index')->with('success', 'Menu link modified successfully.');
        }
    }

    public function destroy(MenuLink $link)
    {
        if ($link->delete()) {
            return redirect()->route('admin.links.index')->with('success', 'Menu link deleted successfully.');
        }
    }
}
