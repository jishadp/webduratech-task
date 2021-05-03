@extends('layout')
@section('title','Payments')
@section('content')
    <div class="bannr">
        <div class="imgDis"><img src="{{ asset('public/images/yoga.jpeg') }}" alt=""/></div>
        <div class="bnrDisc">
            <h3>Yoga & Pilate Training</h3>
            <h5>TRAINING - FITNESS</h5>
            <p>This Yoga and pirate training session is desinged for all levels of trainings..</p>
            <div class="amtDiv">
                <p>For One Session</p>
                <p class="amt">$ 80.00</p>
            </div> 
        </div>
    </div>
    <div class="mainDiv">
            @foreach ($bookings->take(5)->values() as $booking)
            <div class="holdr">
                    <div class="row">
                       <div class="stsDiv">
                          <div class="ststHead">Pending Payment</div>
                          <p class="smlHead">{{ $booking->created_at->format('H:i a, d/m/Y') }}</p>
                       </div>
                       <div class="stsFlag">
                          <ul class="list-unstyled multi-steps">
                             <li @if($booking->status == 0) class="is-active" @endif >Request</li>
                             <li @if($booking->status <= 1) class="is-active" @endif >Service</li>
                             <li @if($booking->status <= 2) class="is-active" @endif>Payment</li>
                          </ul>
                       </div>
                    </div>
                    <div class="row proArea">
                            <div class="w50">
                               <div class="pull-left w10"><img class="thumbImg" src="{{ $booking->image_url }}" alt=""></div>
                               <div class="w50">
                                  <p>{{ $booking->customer_name }}</p>
                                  <p>{{ $booking->customer_location }}</p>
                               </div>
                            </div>
                            <div class="w50">You two had 12 deals before</div>
                         </div>
                    <div class="row">This constomer is available at:</div>
                    <div class="row">
                       <div class="lister">
                            <img src="{{ asset('public/images/clock.png') }}" alt="">
                          <ul>
                             <li>
                                <span>Sunday,December 22nd,2019</span>
                                <span>9.00 am - 2.00pm</span>
                             </li>
                             <li>
                                <span>Sunday,December 22nd,2019</span>
                                <span>9.00 am - 2.00pm</span>
                             </li>
                          </ul>
                       </div>
                    </div>
                    <div class="row">
                        <div class="icns"><img src="{{ asset('public/images/loc.png') }}" alt=""></div>
                        <div class="Locantn">{{ $booking->customer_address }}</div>
                    </div>
                    <div class="row btnHldr">
                       <button class="btn w50 btn-primary">Start Chat</button>
                       <button class="btn w50 btn-primary">Resend Invoice</button>
                    </div>
                 </div>
            @endforeach
            @if($bookings->count() == 0)
            <div class="noBooks">No More Bookings</div>
            @endif
            @if($bookings->count() > 5)
            <button class="btn btn-danger viewMrBtn">View More</button>
            @endif
        </div>
@endsection