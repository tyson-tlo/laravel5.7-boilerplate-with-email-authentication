@extends('account.layouts.default')

@section('account.content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('account.profile.store') }} " method="POST">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name" class="control-label">name</label>
                    <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" value="{{ old('name', auth()->user()->name) }}">

                    @if($errors->has('name'))

                        <span class="help-block" style="color: red">
                            <strong> {{ $errors->first('name') }} </strong>
                        </span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" value="{{ old('email', auth()->user()->email) }}">

                    @if($errors->has('email'))

                        <span class="help-block" style="color: red">
                            <strong> {{ $errors->first('email') }} </strong>
                        </span>

                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection