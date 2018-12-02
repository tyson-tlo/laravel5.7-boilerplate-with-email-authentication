<div class="nav nav-pills flex-column">
    
                    <a class="nav-link {{ return_if(on_page('account'), 'active') }}" href="{{ route('account.index') }}">Acount Overview</a>
                
                    <a class="nav-link {{ return_if(on_page('account/profile'), 'active') }}" href=" {{ route('account.profile.index') }} ">Profile</a>
                
                    <a class="nav-link {{ return_if(on_page('account/password'), 'active') }}" href=" {{ route('account.password.index') }} ">Change Password</a>
            
</div>
