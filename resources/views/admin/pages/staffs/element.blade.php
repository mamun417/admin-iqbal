<div class="col-md-12">
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Name <span class="required-star">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ isset($staff) ? @$staff->name : old('name')}}">

            @error('name')
                <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Email <span class="required-star">*</span></label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" value="{{ isset($staff) ? @$staff->email : old('email')}}">

            @error('email')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Password <span class="required-star">*</span></label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password">

            @error('password')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Confirm Password <span class="required-star">*</span></label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    </div>
</div>


