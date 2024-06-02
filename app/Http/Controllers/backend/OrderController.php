<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index()
    {
        $list = Order::where('status', '!=', 0)
        ->orderBy('created_at', 'DESC')
        ->select('id', 'delivery_name', 'delivery_email', 'delivery_phone', 'delivery_address', 'note', 'created_at')
        ->get();
        return view('backend.order.index', compact("list"));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function show()
    {
    }
}
