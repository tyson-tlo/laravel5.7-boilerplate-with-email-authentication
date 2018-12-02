@extends('account.layouts.default')

@section('account.content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('account.password.store') }} " method="POST">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="password_current" class="control-label">Current Password</label>
                    <input type="password" name="password_current" id="password_current" class="form-control {{ $errors->has('password_current') ? 'is-invalid' : ''}}">

                    @if($errors->has('password_current'))

                        <span class="help-block" style="color: red">
                            <strong> {{ $errors->first('password_current') }} </strong>
                        </span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">New Password</label>
                    <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}">

                    @if($errors->has('password'))

                        <span class="help-block" style="color: red">
                            <strong> {{ $errors->first('password') }} </strong>
                        </span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="control-label">New Password Confirm</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}">

                    @if($errors->has('password_confirmation'))

                        <span class="help-block" style="color: red">
                            <strong> {{ $errors->first('password_confirmation') }} </strong>
                        </span>

                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
    </div>
@endsection