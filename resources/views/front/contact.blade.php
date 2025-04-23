@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Contact')}}
@endsection

@section('content')
    <!-- Page Title-->
<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="{{route('front.index')}}">{{ __('Home') }}</a> </li>
                <li class="separator"></li>
                <li>{{ __('Contact Us') }}</li>
              </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- Page Content-->
  <div class="container padding-bottom-3x mb-1 contact-page">


    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-5 order-lg-1 order-md-2 order-sm-2">

        <!-- Widget Contacts-->
          <!-- Widget Contact Us -->
          <section class="widget widget-featured-posts card rounded p-4">
              <h3 class="widget-title padding-bottom-1x">{{__('Contact Us')}}</h3>

              <h5 class="mt-3 text-uppercase">Kaneshie Head Office</h5>
              <ul class="list-icon margin-bottom-1x">
                  <li><i class="icon-map-pin text-muted"></i> KN 2467 - Kaneshie Pamprom, Adjacent Goil Filling Station</li>
                  <li><i class="icon-phone text-muted"></i> 0240213609 / 0243356509</li>
                  <li><i class="icon-user text-muted"></i> Manager: David Turkson - 0553609195</li>
                  <li><i class="icon-mail text-muted"></i> stepstochristinfo@yahoo.com</li>
                  <li><i class="icon-map-pin text-muted"></i> Code: GA-263-1132</li>
              </ul>

              <h5 class="mt-3 text-uppercase">Accra Branches</h5>
              <strong>Makola</strong>
              <ul class="list-icon margin-bottom-1x">
                  <li><i class="icon-map-pin text-muted"></i> Inside Pomaa Plaza, Zongo Lane</li>
                  <li><i class="icon-user text-muted"></i> Manager: Philip Agyenim Boateng - 0242013057</li>
                  <li><i class="icon-map-pin text-muted"></i> Code: GA-182-0248</li>
              </ul>
              <strong>North Industrial Area</strong>
              <ul class="list-icon margin-bottom-1x">
                  <li><i class="icon-map-pin text-muted"></i> Opposite Melcom Plus</li>
                  <li><i class="icon-user text-muted"></i> Manager: Enoch Danso - 0245109159</li>
                  <li><i class="icon-map-pin text-muted"></i> Code: GA-131-7822</li>
              </ul>

              <h5 class="mt-3 text-uppercase">Other Locations</h5>
              <strong>Kasoa</strong>
              <ul class="list-icon margin-bottom-1x">
                  <li><i class="icon-map-pin text-muted"></i> High Tension, inside IPMC Building</li>
                  <li><i class="icon-map-pin text-muted"></i> Code: CX-000-1524</li>
              </ul>
              <strong>Kumasi</strong>
              <ul class="list-icon margin-bottom-1x">
                  <li><i class="icon-map-pin text-muted"></i> Shalom House, Dr. Mensah</li>
                  <li><i class="icon-user text-muted"></i> Manager: Daniel Tetteh - 0249428954</li>
                  <li><i class="icon-map-pin text-muted"></i> Code: AK-006-3522</li>
              </ul>

              <strong>General Manager</strong>
              <ul class="list-icon">
                  <li><i class="icon-user text-muted"></i> Stephen Abra-Sono - 0542914185</li>
              </ul>
          </section>
          <section class="widget widget-featured-posts card rounded p-4 ">
              <h3 class="widget-title padding-bottom-1x">{{__('Working Days')}}</h3>
              <ul class="list-unstyled text-sm">
                  <li><span class="text-muted">Monday to Thursday:</span> 7 a.m. - 5:30 p.m.</li>
                  <li><span class="text-muted">Friday:</span> 7 a.m. - 4:30 p.m.</li>
              </ul>
          </section>

      </div>

      <div class="col-lg-8 col-md-7 col-sm-7 order-lg-2 order-md-1 order-sm-1">
        <div class="contact-form-box card">

            <h2 class="h4">{{ __('Tell Us Your Message :') }}</h2>
            <form class="row mt-2" method="Post" action="{{route('front.contact.submit')}}">
                @csrf
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first-name">{{__('First Name')}}</label>
                    <input class="form-control form-control-rounded" name="first_name" type="text" id="first-name" placeholder="{{__('First Name')}}" >
                    @error('first_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last-name">{{__('Last Name')}}</label>
                    <input class="form-control form-control-rounded" name="last_name" type="text" id="last-name" placeholder="{{__('Last Name')}}" >
                    @error('last_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="contact-email">{{__('E-mail')}}</label>
                    <input class="form-control form-control-rounded" type="email" name="email" id="contact-email" placeholder="{{__('E-mail')}}" >
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="contact-tel">{{__('Phone')}}</label>
                    <input class="form-control form-control-rounded" type="text" name="phone" id="contact-tel" placeholder="{{__('Phone')}}" >
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                </div>

                <div class="col-12  ">
                  <div class="form-group">
                    <label for="message-text">{{__('Message')}}</label>
                    <textarea class="form-control form-control-rounded" rows="9" name="message" id="message-text" placeholder="{{__('Write your message here...')}}"></textarea>
                    @error('message')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                @if ($setting->recaptcha == 1)
                <div class="col-lg-12 mb-4">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                    @php
                        $errmsg = $errors->first('g-recaptcha-response');
                    @endphp
                    <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                    @endif
                </div>
                @endif


                <div class="col-12 text-right">
                    <!-- Show toastr after succesfull submit -->
                  <button class="btn btn-primary" type="submit"><span>{{ __('Send message') }}</span></button>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
@endsection
