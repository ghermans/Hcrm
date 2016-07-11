@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            <div class="page-header">
                <h2> Update a new customer </h2>
            </div>

    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
      <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Customer details</a></li>
      <li><a href="#">Manage contacts</a></li>
    </ul>
  </li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Products / Services</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Invoices</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Payments</a></li>

</ul>


<div class="tab-content">
  <div class="clearfix">&nbsp;</div>
  <div id="home" class="tab-pane fade in active">
    <div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Personal details</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal">
          <div class="form-group formSep">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <p class="form-control-static">{!! $customer->name !!} {!! $customer->fname !!}</p>
            </div>
          </div>
          <div class="form-group formSep">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <address>
                  {!! $customer->street !!}<br>
                  {!! $customer->zipcode !!} {!! $customer->city !!}<br>
                  {!! $customer->country !!}
                </address>
              </div>
          </div>

          <div class="form-group formSep">
            <label class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
              <p class="form-control-static">{!! $customer->phone !!}</p>
            </div>
          </div>

          <div class="form-group formSep">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><a href="mailto:{!! $customer->email !!}">{!! $customer->email !!}</a></p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Administration details</h3>
     </div>
    <div class="panel-body">
      <dl class="dl-horizontal">
        <dt>Open invoices</dt>
        <dd class="text-success">0</dd>
        <dt>Total open balance</dt>
        <dd class="text-success">0.00</dd>
        <dt>Last payment made</dt>
        <dd> </dd>
        <dt>Latest invoice made</dt>
        <dd> </dd>
      </dl>
    </div>
  </div>
  </div>
</div>
<div class="row">


  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Recent tickets</h3>
      </div>
      <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <th>{{trans('tickets.number')}}</th>
                <th>{{trans('tickets.type')}}</th>
                <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4">{{trans('tickets.subject')}}</th>
                <th>{{trans('tickets.status')}}</th>
                <th>{{trans('tickets.created')}}</th>
              </thead>
              <tbody>
                <tr class="warning">
                  <td><a href="#">#1</a></td>
                  <td>Administration</td>
                  <td>Payment made</td>
                  <th>Open</td>
                  <th>11/07/2016 18:00</th>
                </tr>

                <tr>
                  <td><a href="#">#1</a></td>
                  <td>Administration</td>
                  <td>Payment made</td>
                  <th>Open</td>
                  <th>11/07/2016 18:00</th>
                </tr>

                <tr>
                  <td><a href="#">#2</a></td>
                  <td>Administration</td>
                  <td>Payment made</td>
                  <th>Open</td>
                  <th>11/07/2016 18:00</th>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-default">
     <div class="panel-heading">
      <h3 class="panel-title">Recent orders</h3>
     </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <th>{{trans('tickets.number')}}</th>
          <th>Product</th>
          <th>{{trans('tickets.status')}}</th>
          <th>{{trans('tickets.created')}}</th>
        </thead>
        <tbody>
          <tr class="warning">
            <td><a href="#">#1</a></td>
            <td>Administration</td>
            <th>Open</td>
            <th>11/07/2016 18:00</th>
          </tr>

          <tr>
            <td><a href="#">#1</a></td>
            <td>Administration</td>
            <th>Open</td>
            <th>11/07/2016 18:00</th>
          </tr>

          <tr>
            <td><a href="#">#2</a></td>
            <td>Administration</td>
            <th>Open</td>
            <th>11/07/2016 18:00</th>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
  </div>
  </div>






</div>
 </div>
   <div id="profile" class="tab-pane fade in">
     <form action="{!! route('customer.insert') !!}" method="POST" class="form-horizontal">
         {{-- CSRF field --}}
         {{ csrf_field() }}

         {{-- Name form-group --}}
         <div class="form-group formSep {{ $errors->has('name') ? 'has-error': '' }}">
             <label class="col-sm-3 control-label" for="name">
                 Lastname: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->name }}" type="text" id="name" name="name" placeholder="Customer lastname" class="form-control"/>

                 @if($errors->has('name'))
                     <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- Firstname --}}
         <div class="form-group formSep {{ $errors->has('fname') ? 'has-error' : '' }}">
             <label class="col-sm-3 control-label" for="fname">
                 Firstname <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->fname }}" type="text" id="fname" name="fname" placeholder="Customer firstname" class="form-control" />

                 @if($errors->has('fname'))
                     <span class="help-block">
                         <strong>{{ $errors->first('fname') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- Street form-group --}}
         <div class="form-group formSep {{ $errors->has('street') ? 'has-error' : '' }}">
             <label class="col-sm-3 control-label" for="street">
                 Street: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->street }}" type="text" id="street" name="street" placeholder="Street" class="form-control" />

                 @if($errors->has('street'))
                     <span class="help-block">
                         <strong>{{ $errors->first('street') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- Zipcode form-group --}}
         <div class="form-group formSep {{ $errors->has('zipcode') ? 'has-error' : '' }}">
             <label class="col-sm-3 control-label" for="zipcode">
                 Zipcode: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->zipcode }}" type="text" id="zipcode" name="zipcode" placeholder="Zipcode" class="form-control" />

                 @if($errors->has('zipcode'))
                     <span class="help-block">
                         <strong>{{ $errors->first('zipcode') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- city form-group --}}
         <div class="form-group formSep {{ $errors->has('city') ? 'has-error' : '' }}">
             <label for="city" class="col-sm-3 control-label">
                 City: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->city }}" type="text" id="city" name="city" placeholder="City" class="form-control" />

                 @if($errors->has('city'))
                     <span class="help-block">
                         <strong>{{ $errors->first('city') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- State form-group --}}
         <div class="form-group formSep {{ $errors->has('state') ? 'has-error' : '' }}">
             <label for="state" class="col-sm-3 control-label">
                 State: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->state }}" type="text" placeholder="State/province" class="form-control" name="state">

                 @if($errors->has('state'))
                     <span class="help-block">
                         <strong> {{ $errors->first('state') }} </strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- country form-group --}}
         <div class="form-group formSep {{ $errors->has('country') ? 'has-error' : '' }}">
             <label for="country" class="col-sm-3 control-label">
                 Country <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <select name="country" id="country" class="form-control">
                     <option value="">Select the country</option>

                     @foreach($countries as $country)
                         <option value="{{ $country->country }} @if($country->country === $customer->country0) selected @endif ">
                             {{ $country->country }}
                         </option>
                     @endforeach
                 </select>

                 @if($errors->has('country'))
                     <span class="help-block">
                         <strong>{{ $errors->first('country') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- email form-group --}}
         <div class="form-group formSep  {{ $errors->has('email') ? 'has-error' : '' }}">
             <label class="control-label col-sm-3" for="email">
                 Email: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->email }}" type="text" id="email" class="form-control" name="email" placeholder="Customer email">

                 @if ($errors->has('email'))
                     <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- phone form-group --}}
         <div class="form-group formSep {{ $errors->has('phone') ? 'has-error' : '' }}">
             <label for="phone" class="control-label col-sm-3">
                 Phone nr: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->phone }}" type="text" id="phone" class="form-control" name="phone" placeholder="Customer phone nr." />

                 @if($errors->has('phone'))
                     <span class="help-block">
                         <strong>{{ $errors->first('phone') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{-- mobile form-group --}}
         <div class="form-group formSep">
             <label for="mobile" class="control-label col-sm-3">
                 Mobile nr:
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->mobile }}" type="text" id="mobile" class="form-control" name="mobile" placeholder="Customer mobile nr." />
             </div>
         </div>

         {{-- Company form-group --}}
         <div class="form-group formSep">
             <label for="company" class="control-label col-sm-3">
                 Company: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->company }}" type="text" id="company" class="form-control" name="company" placeholder="Customer Company" />
             </div>
         </div>

         {{-- vat form-group --}}
         <div class="form-group formSep {{ $errors->has('vat') ? 'has-error' : '' }}">
             <label for="vat" class="control-label col-sm-3">
                 VAT number: <span class="text-danger">*</span>
             </label>
             <div class="col-sm-9">
                 <input value="{{ $customer->vat }}" type="text" id="vat" name="vat" class="form-control" placeholder="Customer VAT number" />

                 @if($errors->has('vat'))
                     <span class="help-block">
                         <strong>{{ $errors->first('vat') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         {{--  Submit button--}}
         <div class="form-group">
             <div class="col-sm-9 col-sm-offset-3">
                 <input type="submit" class="btn btn-primary" value="Send">
                 <input type="reset" class="btn btn-danger" value="Reset form">
             </div>
         </div>

     </form>
  </div>
      </div>
    </div>
  </div>
@endsection
