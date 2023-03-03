<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('dashboard', ['orders' => $orders]);
    }
    public function update(Request $request, $id)
    {
       $request->validate([
        'name' => 'required|string',
        'status' => 'required|string',
       ]);

       $orders = Order::find($id);
       $orders->update([
        'name' => $request->name,
        'status' => $request->status,
       ]);

       return redirect()->route('dashboard')

       ->with('success', 'Bestelling is geplaatst!');
    }
    public function edit($id)
    {
        $orders = Order::find($id);
        return view('users.edit', ['orders' => $orders]);
    }
}
