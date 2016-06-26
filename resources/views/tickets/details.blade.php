@extends('layouts.app')
@section('content')
<div class="page-header">
 <h2>{{trans('support.ticket')}} #{!! $ticket["id"] !!}</h2>
</div>

<div class="row">
  <div class="col-md-offset-1 col-lg-10">
    <div class="btn-toolbar" role="toolbar" aria-label="...">
     <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default">{{ trans('tickets.reply') }}</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#responses" data-backdrop="static">{{ trans('tickets.responses') }}</button>
     </div>
     <div class="btn-group" role="group" aria-label="...">
       <button type="button" class="btn btn-default" data-toggle="modal" data-target="#merge" data-backdrop="static">{{ trans('tickets.merge') }}</button>
     </div>
     <div class="btn-group" role="group" aria-label="...">
      <button type="button" class="btn btn-danger">{{ trans('tickets.close') }}</button>
    </div>
    </div>
  </div>
 </div>

<div class="row">
 <div class="col-md-offset-1 col-lg-10">
   <div class="panel panel-default">
    <div class="panel-heading">General details</div>
     <div class="panel-body">
       <div class="row">
        <div class="col-md-6">
          <dl class="dl-horizontal">
          <dt>{{ trans('tickets.number') }}</dt>
          <dd>#{!! $ticket->id !!}</dd>

          <dt>{{ trans('tickets.type') }}</dt>
          <dd>{!! $ticket->type !!}</dd>

          <dt>{{ trans('tickets.subject') }}</dt>
          <dd>{!! $ticket->subject !!}</dd>

          <dt>{{ trans('tickets.status') }}</dt>
          <dd>{!! $ticket->status->name !!}</dd>
        </dl>
        </div>

        <div class="col-md-6">
            <dl class="dl-horizontal">
            <dt>{{ trans('tickets.requester') }}</dt>
            <dd><a href="{{url('customers/details')}}/{!! $ticket->customer->id !!}">{!! $ticket->customer->fname !!} {!! $ticket->customer->name !!}</a></dd>

            <dt>{{ trans('tickets.assigned') }}</dt>
            <dd></dd>

            <dt>{{ trans('tickets.created') }}</dt>
            <dd>{!! $ticket->created_at !!}</dd>

            <dt>{{ trans('tickets.updated') }}</dt>
            <dd>{!! $ticket->updated_at !!}</dd>

          </dl>
        </div>
        </div>
 </div>
 </div>
</div>
</div>

<div class="row">
  <div class="col-md-offset-1 col-lg-10">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {!! $ticket->customer->fname !!} {!! $ticket->customer->name !!}
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <p>{!! $ticket->description !!}</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
 </div>
</div>
</div>

<!-- Modal -->
<div class="modal" id="responses" tabindex="-1" role="dialog" aria-labelledby="responsesLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="responsesLabel">Canned responses</h4>
      </div>
      <form class="form-horizontal">
      <div class="modal-body">
  <div class="form-group">
    <label for="topicGroup" class="col-sm-3 control-label">Topic group</label>
    <div class="col-sm-9">
      <select name="topicGroup" id="topicGroup" class="form-control">
       <option value=""></option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="topic" class="col-sm-3 control-label">Topic</label>
    <div class="col-sm-9">
      <select name="topic" id="topic" class="form-control">
       <option value=""></option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="message" class="col-sm-3 control-label">Message</label>
    <div class="col-sm-9">
      <textarea name="message" id="message" class="form-control"></textarea>
    </div>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>


<div class="modal" id="merge" tabindex="-1" role="dialog" aria-labelledby="mergeLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mergeLabel">Merge ticket</h4>
      </div>
      <form class="form-horizontal">
      <div class="modal-body">
  <div class="form-group">
    <label for="topicGroup" class="col-sm-3 control-label">Topic group</label>
    <div class="col-sm-9">
     fdsfsdf
    </div>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>
@endsection