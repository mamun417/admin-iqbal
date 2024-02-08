<div class="col-md-6">
    <div class="form-group">
        <label>First Name <span class="required-star">*</span></label>
        <div>
            <input type="text" class="form-control" name="first_name" value="{{ isset($client) ? @$client->first_name : old('first_name')}}">

            @error('first_name')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Last Name <span class="required-star">*</span></label>
        <div>
            <input type="text" class="form-control" name="last_name" value="{{ isset($client) ? @$client->last_name : old('last_name')}}">

            @error('name')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Email <span class="required-star"></span></label>
        <div>
            <input type="text" class="form-control" name="email" value="{{ isset($client) ? @$client->email : old('email')}}">

            @error('email')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Phone <span class="required-star">*</span></label>
        <div>
            <input type="text" class="form-control" name="phone" value="{{ isset($client) ? @$client->phone : old('phone')}}">

            @error('phone')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>DOB <span class="required-star"></span></label>
        <div>
            <input type="date" class="form-control" name="dob" value="{{ isset($client) ? @$client->dob : old('dob')}}">

            @error('dob')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>Passport No <span class="required-star"></span></label>
        <div>
            <input type="text" class="form-control" name="passport_no" value="{{ isset($client) ? @$client->passport_no : old('passport_no')}}">

            @error('passport_no')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>NID No <span class="required-star"></span></label>
        <div>
            <input type="text" class="form-control" name="nid_no" value="{{ isset($client) ? @$client->nid_no : old('nid_no')}}">

            @error('nid_no')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Address <span class="required-star"></span></label>
        <div>
            <input type="text" class="form-control" name="address" value="{{ isset($client) ? @$client->address : old('address')}}">

            @error('address')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>District <span class="required-star">*</span></label>
        <div>
            <select name="district_id" class="form-control">
                <option value="">Select District</option>
                @foreach(@$districts as $district)
                    <option value="{{ @$district->id }}" {{ isset($client) && $client->district_id == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
                @endforeach
            </select>

            @error('district_id')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Note <span class="required-star"></span></label>
        <div>
            <textarea rows="5" class="form-control" name="note">{{ isset($client) ? @$client->note : old('note')}}</textarea>

            @error('note')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Description <span class="required-star"></span></label>
        <div>
            <textarea rows="5" class="form-control" name="description">{{ isset($client) ? @$client->description : old('description')}}</textarea>

            @error('description')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Agent <span class="required-star">*</span></label>
        <div>
            <select name="agent_id" class="form-control">
                <option value="">Select Agent</option>
                @foreach(@$agents as $agent)
                    <option value="{{ @$agent->id }}" {{ isset($client) && $client->agent_id == $agent->id ? 'selected' : '' }}>{{ $agent->name }}</option>
                @endforeach
            </select>

            @error('agent_id')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>Status <span class="required-star">*</span></label>
        <div>
            <select name="status" class="form-control">
                <option>Select status</option>
                <option value="Processing" {{ isset($client) && $client->status == "Processing" ? 'selected' : '' }}>Processing</option>
                <option value="Success" {{ isset($client) && $client->status == "Success" ? 'selected' : '' }}>Success</option>
                <option value="Failed" {{ isset($client) && $client->status == "Failed" ? 'selected' : '' }}>Failed</option>
            </select>

            @error('agent_id')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>Contract Price <span class="required-star"></span></label>
        <div>
            <input type="number" class="form-control" name="contract_price" value="{{ isset($client) ? @$client->contract_price : old('contract_price')}}">

            @error('contract_price')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>Paid <span class="required-star"></span></label>
        <div>
            <input type="number" class="form-control" name="paid" value="{{ isset($client) ? @$client->paid : old('paid')}}">

            @error('paid')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label>Due <span class="required-star"></span></label>
        <div>
            <input type="number" class="form-control" name="due" value="{{ isset($client) ? @$client->due : old('due')}}">

            @error('due')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>
