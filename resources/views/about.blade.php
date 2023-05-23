@extends('layout')

@section('title', 'about')

<title>ABOUT</title>
@section('content')
<link rel ='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css')?>'>


<section class="about" id="about">
        <div class="container">
  
          <div class="main-txt">
            <h1>About <span>Us</span></h1>
          </div>
  
          <div class="row" style="margin-top: 50px;">
  
            <div class="col-md-4 py-2 py-md-0">
              <div>
                <img src="images/agency.svg" class="img-fluid" alt="logo" >
              </div>
            </div>
  
            <div class="col-md-6 py-3 py-md-0">
              <h2>How Travel Agency Work</h2>
              <p> As a reputable Sipalay tour operator, Travel Goals offers the best Sipalay travel packages, including private tours,
                 small group tours, and 100% tailor-made itineraries to the key tourist spots in Sipalay for families, couples, friends, and business visitors.
                 <br> Come and join us to explore true and authentic Sipalay!
                <br><br>When arranging a vacation, travel agents assist clients with managing everything from lodging to transportation. 
                They assist in creating the itinerary as well, making the vacation as enjoyable as possible. 
                Agents help clients have a simpler holiday by arranging things like family outings and quality lodging.</p>
            </div>
          </div>
  
        </div>
      </section>
      <!-- About End -->
  
    
@endsection

