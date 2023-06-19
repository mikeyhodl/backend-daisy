@extends('layouts.app')

@section('content')

<div class="hero min-h-screen" style="background-image: url(https://images.pexels.com/photos/2507025/pexels-photo-2507025.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
      <h1 class="mb-5 text-4xl font-bold">OutDoor Cinema Arena, Mombasa</h1>
      <h3 class="mb-5 text-3xl font-bold"><em style="color: #6cd592;">Coming Soon</em></h3>
      <label class="btn btn-primary" for="my_modal_7">Join Waitlist</label>
      <!-- The button to open modal -->
<!-- <label for="my_modal_7" class="btn">open modal</label> -->

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my_modal_7" class="modal-toggle" />
<div class="modal">
  <div class="modal-box">
    <h3 class="text-lg font-bold">Hello!</h3>
    <p class="py-4">This modal works with a hidden checkbox!</p>
    
  </div>
  <label class="modal-backdrop" for="my_modal_7">Close</label>
</div>
    </div>
  </div>
</div>
@endsection
