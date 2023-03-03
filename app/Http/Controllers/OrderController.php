<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view ('order.index', ['orders' =>$orders]);
        return $orders;
    }
    

    public function store(Request $request)
    {      
        
        Order::create($request->only(['name', 'totaalprijs', 'groote', ]));

        return redirect()->route('order.index')

        ->with('success', 'Order succesfully completed!');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::find($id);
            $order->delete();

            return redirect()->route('order.index')
                ->with('success', 'Item deleted successfully');
    }

}
