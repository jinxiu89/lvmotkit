<?php

namespace App\Http\Controllers;

//use App\Exceptions\InvalidRequestException;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\ProductSku;
use App\Models\UserAddress;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Jobs\CloseOrder;
use App\Services\OrderService;


class OrdersController extends Controller
{
    protected $OrderService;

    public function __construct(OrderService $orderService)
    {
        $this->OrderService = $orderService;
    }

    public function index(Request $requests)
    {
        $orders = $this->OrderService->all($requests->user()->id);
        return view('orders.index', ['orders' => $orders]);
    }

    public function show(Order $order, Request $request)
    {
        return view('orders.show', ['order' => $order->load(['items.productSku', 'items.product'])]);
    }

    /***
     * @param OrderRequest $request
     * @return mixed
     * 要有服务的概念,因为你写的程序可能会被应用于其他的方面,例如小程序,app,单页网站等
     */
    public function store(OrderRequest $request)
    {
        $user = $request->user();
        $address=UserAddress::find($request->input('address_id'));
        return $this->OrderService->store($user,$address,$request->input('remark'),$request->input('items'));
    }
}
