@extends('frontend.layouts.master')

@section('content')

<!-- Banner Area Starts -->
<section class="banner-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>the most interesting food in the world</h6>
                <h1>Discover the <span class="prime-color">flavors</span><br>
                <span class="style-change">of <span class="prime-color">Bay</span>View</span></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Welcome Area Starts -->
<section class="welcome-area section-padding2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="welcome-img">
                    <img src="{{asset('public/frontend')}}/assets/images/welcome-bg.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="welcome-text mt-5 mt-md-0">
                    <h3><span class="style-change">welcome</span> <br>to BayView</h3>
                    <p class="pt-3">Created god gathered don't you yielding herb you had. And isn't, god was saw. Dominion. Great sixth for in unto was. Open can't tree am waters brought. Divide after there. Was.</p>
                    <p>Created god gathered don't you yielding herb you had. And isn't, god was saw. Dominion. Great sixth for in unto was. Open can't tree waters brought. Divide after there. Was. Created god gathered don't you yielding herb you had. And isn't god.</p>
                    <a href="#" class="template-btn mt-3">book a table</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Food Area starts -->
<section class="food-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-top">
                    <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                    <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                </div>
            </div>
        </div>
        <div class="row">
          @foreach($dishes as $dish)
            <div class="col-md-4 col-sm-6">
                <div class="single-food">
                    <div class="food-img">
                        <img src="{{asset('public/upload/dish_images/'.$dish->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h5>{{$dish->title}}</h5>
                            <span class="style-change">৳{{$dish->price}}</span>
                        </div>
                        <p class="pt-3">{{$dish->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Food Area End -->

<!-- Reservation Area Starts -->
<div class="reservation-area section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Natural ingredients and testy food</h2>
                <h4 class="mt-4">some trendy and popular courses offerd</h4>
                <a href="" class="template-btn template-btn2 mt-4">reservation</a>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Area End -->

<!-- Deshes Area Starts -->
<div class="deshes-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top2 text-center">
                    <h3>Our <span>special</span> deshes</h3>
                    <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6 align-self-center">
                <h1>01.</h1>
                <div class="deshes-text">
                    <h3><span>Garlic</span><br> green beans</h3>
                    <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                    <span class="style-change">$12.00</span>
                    <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                <img src="{{asset('public/frontend')}}/assets/images/deshes1.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                <img src="{{asset('public/frontend')}}/assets/images/deshes2.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2">
                <h1>02.</h1>
                <div class="deshes-text">
                    <h3><span>Lemon</span><br> rosemary chicken</h3>
                    <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                    <span class="style-change">$12.00</span>
                    <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deshes Area End -->


<!-- Update Area Starts -->
<section class="update-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top2 text-center">
                    <h3>Our <span>food</span> update</h3>
                    <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
        <div class="row">
          @foreach($dishes as $dish)
            <div class="col-md-4">
                <div class="single-food">
                    <div class="food-img">
                        <img src="{{asset('public/upload/dish_images/'.$dish->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="post-admin d-lg-flex mb-3">
                            <span class="mr-5 d-block mb-2 mb-lg-0"><i class="fa fa-user-o mr-2"></i>{{$dish['user']['name']}}</span>
                            <span><i class="fa fa-calendar-o mr-2"></i>{{$dish->date}}</span>
                        </div>
                        <h5>{{$dish->title}}</h5>
                        <p>{{$dish->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Update Area End -->

<!-- Table Area Starts -->
<section class="table-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top2 text-center">
                    <h3>Book <span>your</span> table</h3>
                    <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <form action="{{route('reservation.store')}}" id="myform" method="post">
                    @csrf
                    <div class="form-row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"
                            placeholder="Name" 
                            >
                             <font style="color:red"> {{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control"
                            placeholder="Phone" 
                            >
                             <font style="color:red"> {{($errors->has('phone'))?($errors->first('phone')):''}}</font>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control"
                            placeholder="Email" 
                            >
                             <font style="color:red"> {{($errors->has('email'))?($errors->first('email')):''}}</font>
                        </div>
                        <div class="form-group">
                            <input type="text" name="date_and_time" id="datetimepicker1" class="form-control"
                            placeholder="Date&Time" 
                            >
                        <font style="color:red">
                                {{($errors->has('date_and_time'))?($errors->first('date_and_time')):''}}</font>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6">
                    
                    <input type="number" name="person" rows="3" class="form-control" placeholder="person" >
                        
                    </div>

                    <div class="form-group col-md-12 col-sm-12">
                        
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Table Area End -->


  @endsection
