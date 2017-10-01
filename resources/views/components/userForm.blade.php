<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    <label for="first_name" class="col-md-2 col-xs-2 col-sm-2 control-label">First name</label>

    <div class="col-md-3 col-xs-8 col-sm-4">
        <input id="first_name" type="text" class="form-control" name="first_name"
               value="{{ old('first_name') }}" required autofocus>

        @if ($errors->has('first_name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    <label for="last_name" class="col-md-2 col-xs-2 col-sm-2 control-label">Last name</label>

    <div class="col-md-3 col-xs-8 col-sm-4">
        <input id="last_name" type="text" class="form-control" name="last_name"
               value="{{ old('last_name') }}" autofocus>

        @if ($errors->has('last_name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-2 col-xs-2 col-sm-2 control-label">E-Mail Address</label>

    <div class="col-md-3 col-xs-8 col-sm-4">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-md-2 col-xs-2 col-sm-2 control-label">Phone number</label>

    <div class="col-md-3 col-xs-8 col-sm-4">
        <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}"
               min="00000000" max="99999999">

        @if ($errors->has('phone'))
            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
        @endif
    </div>
</div>
@managerOrAdmin
<div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
    <label for="color" class="col-md-2 col-xs-2 col-sm-2 control-label">Color</label>

    <div class="col-md-3 col-xs-8 col-sm-4">
        <select name="color" id="create_user_color_select" class="form-control" required>
            @foreach ($colors as $color)
                <option value="{{$color->id}}" data-hex="{{$color->hexColor}}" style="background: {{$color->hexCode}}"></option>
            @endforeach
        </select>

        @if ($errors->has('color'))
            <span class="help-block">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
    <label for="role" class="col-md-2 col-xs-2 col-sm-2 control-label">Role</label>

    <div class="col-md-3 col-xs-8 col-sm-4">
        <select name="role" class="form-control">
            @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->role}}</option>
            @endforeach
        </select>

        @if ($errors->has('role'))
            <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
        @endif
    </div>
</div>
@endmanagerOrAdmin