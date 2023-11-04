<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Str;

class MenuService
{
    public function create($request)
    {
        try {
            Menu::create([
                'name' => (string) $request->input('name'),
                'prarent_id' => (int) $request->input('prarent_id'),
                'description' =>  (string)$request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (int) $request->input('active'),
                'slug' => Str::slug($request->input('name'), '-'),
            ]);

            session()->flash('success', 'thanh cong');
            // Session::flash('success', 'thanh cong');
        } catch (\Exception $err) {
            // Session::flash('error', 'That bai');
            session()->flash('error', 'that bai !!!');
            dd($request->input());
            return false;
        };
        return true;
    }
}
