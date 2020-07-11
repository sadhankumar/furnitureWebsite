<div class="contact-form">
    <h4> SUBSCRIBE </h4>
    <p> Sign up to get the latest on sales, new releases and more … </p>
  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @if(\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div>
  @endif
  <form id="contact" action="{{url('customerInfo')}}" method="post">
    <!-- {{csrf_field()}} -->
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <fieldset>
          <input name="customer_first_name" type="text" id="first" placeholder="First Name*" required="">
        </fieldset>
      </div>
      <div class="col-md-6 col-sm-12">
        <fieldset>
          <input name="customer_last_name" type="text" id="last" placeholder="Last Name*" required="">
        </fieldset>
      </div>
      <div class="col-md-12 col-sm-12">
        <fieldset>    
          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
        </fieldset>
      <span id="error_email"></span>
      </div>
      <div class="col-md-12 col-sm-12">
        <fieldset>
          <input name="numbers" type="text" id="MobileNo" maxlength="10" placeholder="Mobile No">
        </fieldset>
      </div>
      <div class="col-md-12 col-sm-12">
        <fieldset>
          <input name="product_id" type="text" id="productId" placeholder="Product Id" required="">
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <textarea name="description" rows="6" id="message" placeholder="Message" required=""></textarea>
        </fieldset>
      </div>
      <div class="col-lg-12">
        <fieldset>
          <button type="submit" id="form-submit" class="main-button" name="register">Send Message</button>
        </fieldset>
      </div>
      {{ csrf_field() }}
    </div>
  </form>
</div>