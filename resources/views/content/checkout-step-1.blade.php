@extends('layouts.index')

@section('title', 'Checkout')

@section('content')
<div class="row">
    <!--  ==========  -->
    <!--  = Main content =  -->
    <!--  ==========  -->
    <section class="span12">
        
        <div class="checkout-container">
            <div class="row">
                <div class="span10 offset1">
                    
                    <!--  ==========  -->
                    <!--  = Header =  -->
                    <!--  ==========  -->
                    <header>
                        <div class="row">
                            <div class="span8">
                                <div class="center-align">
                                    <h1><span class="light">Review</span> Shopping Cart</h1>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="right-align">
                                    <img src="{{url('images/buttons/security.jpg')}}" alt="Security Sign" width="92" height="65" />
                                </div>
                            </div>
                        </div>
                    </header>
                    
                    <!--  ==========  -->
                    <!--  = Steps =  -->
                    <!--  ==========  -->
                    <div class="checkout-steps">
                        <div class="clearfix">
                            <div class="step active">
                                <div class="step-badge">1</div>
                                Shopping Cart
                            </div>
                            <div class="step">
                                <div class="step-badge">3</div>
                                Shipping Address
                            </div>
                            <div class="step">
                                <div class="step-badge">2</div>
                                Payment Method
                            </div>
                            <div class="step">
                                <div class="step-badge">4</div>
                                Confirm &amp; Pay
                            </div>
                        </div>
                    </div> <!-- /steps -->
                    
                    <!--  ==========  -->
                    <!--  = Selected Items =  -->
                    <!--  ==========  -->
                    <table class="table table-items">
                        <thead>
                            <tr>
                                <th colspan="2">Item</th>
                                <th><div class="align-center">Quantity</div></th>
                                <th><div class="align-right">Price</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $c)
                            <tr>
                                <td class="image"><img src="{{url('images/galeri-7.jpg')}}" alt="" width="124" height="124" /></td>
                                <td class="desc"> {{ $c->name }}&nbsp; 
                                    <a title="Remove Item" class="icon-remove-sign" href="{{route('cart.destroy', ['id'=>$c->rowId ])}}" onclick="event.preventDefault();
                                                 document.getElementById('remove-{{$c->id}}').submit();"></a>
                                    <form id="remove-{{$c->id}}" action="{{route('cart.destroy', ['id'=>$c->rowId ])}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </td>
                                <td class="qty">
                                    <input type="text" class="tiny-size" value="{{$c->qty}}" readonly="" />
                                </td>
                                <td class="price">
                                    Rp.{{ number_format($c->price, 2, ',', '.') }}
                                </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="2" rowspan="2">
                                    <div class="alert alert-info">
                                        <button data-dismiss="alert" class="close" type="button">×</button>
                                        Shipping costs are calculated based on location. <a href="#">More information</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="stronger">Subtotal:</td>
                                <td class="stronger"><div class="size-13 align-right">
                                    Rp.{{Cart::subtotal(2, ',', '.')}}</div></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <hr />
                    
                    <p class="right-align">
                        In the next step you will choose your shipping address &nbsp; &nbsp;
                        <a href="{{ url('checkout-step-2') }}" class="btn btn-warning higher bold">CONTINUE</a>
                    </p>
                </div>
            </div>
        </div>
    </section> <!-- /main content -->
</div>
@endsection