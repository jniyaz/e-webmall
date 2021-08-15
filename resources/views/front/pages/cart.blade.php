@extends('layouts.front')

@section('content')
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Cart</h1>
                @if(count($cartItems) > 0)
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>remove</th>
                                    <th>images</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                    @foreach ($cartItems as $k => $item)
                                    <tr>
                                        <td class="product-remove">
                                            <a onClick="return confirm('Are you sure, to delete this item from your cart?');" href="{{ route('cart.destroy', $item->id) }}"><i class="pe-7s-close"></i></a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="/assets/img/cart/1.jpg" alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{ $item->name }}</a></td>
                                        <td class="product-price-cart"><span class="amount">${{ $item->price }}</span></td>
                                        <td class="product-quantity">
                                            <form class="form" action="{{ route('cart.update', $item->id) }}">
                                                <input type="number" name="quantity" min="1" max="7" value="{{ $item->quantity }}" />
                                                <button type="submit" class="btn btn-xs btn-success">Save</button>
                                            </form>
                                        </td>
                                        <td class="product-subtotal">${{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }}</td>
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal<span>${{ \Cart::session(auth()->id())->getTotal() }}</span></li>
                                    <li>Total<span>${{ \Cart::session(auth()->id())->getTotal() }}</span></li>
                                </ul>
                                <a href="{{ route('checkout.index') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div>
                        <span>No Items in the cart.</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
