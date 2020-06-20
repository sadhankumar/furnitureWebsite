@extends('welcome')

@section('content')
  <p>this the one that I'm trying to yield on the welcome.blade.php</p>
  <!-- <div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12">
      <div class="contact-form">
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$errors}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if(\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div>  
        @endif
        <form id="contact" action="{{url('customer_infos')}}" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <fieldset>
                <input name="customer_name" type="text" id="name" placeholder="Your Name*" required="">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <fieldset>    
                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
              </fieldset>
            </div>
            <div class="col-md-12 col-sm-12">
              <fieldset>
                <input name="numbers" type="number" id="MobileNo" placeholder="Mobile No">
              </fieldset>
            </div>
            <div class="col-md-12 col-sm-12">
              <fieldset>
                <input name="product_id" type="text" id="productId" placeholder="Product Id">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="description" rows="6" id="message" placeholder="Message" required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>   -->
@endsection
