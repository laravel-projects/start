<div class="list-group">
    <a href="{{route('app.profile.settings')}}" class="list-group-item {{ (\Request::route()->getName() == 'app.profile.settings')? 'active' : '' }}">
        {{ucfirst(trans('lib.account'))}}
    </a>
    <a href="{{route('app.profile.settings.security')}}" class="list-group-item {{ (\Request::route()->getName() == 'app.profile.settings.security')? 'active' : '' }}">
        {{ucfirst(trans('lib.security'))}}
    </a> 
</div> 