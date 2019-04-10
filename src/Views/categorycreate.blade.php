@extends(Config::get('chatter.master_file_extend')) 
@section(Config::get('chatter.yields.head'))
<link href="{{ url('/vendor/devdojo/chatter/assets/vendor/spectrum/spectrum.css') }}" rel="stylesheet">
<link href="{{ url('/vendor/devdojo/chatter/assets/css/chatter.css') }}" rel="stylesheet">
@endif 
@stop 
@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4> Define A New Role </h4>
            </div>
            <div class="card-body">
                <form class="form" method="POST" action="/forumCategory/create">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label>Forum Category Name</label>
                            <input class="form-control {{$errors->has('name')? 'is-invalid': ''}}" type="text" name="name" placeholder="Role Name" />
                            @if($errors->has('name'))
                                <div class="text-danger">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                        <div class="form-actions center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection