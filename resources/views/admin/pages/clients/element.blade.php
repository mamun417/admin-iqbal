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


<div class="col-md-6">
    <div class="form-group">
        <label class="control-label">Client Photos</label>
        <input type="file" name="image" class="form-control" id="imgInp">
        <div id="image-preview-container" class="mt-2"></div>

        @error('image')
        <span class="help-block m-b-none text-danger">
            {{ @$message }}
        </span>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label">Client Documents</label>
        <input type="file" name="doc[]" multiple class="form-control" id="docInp">
        <div id="doc-preview-container" class="mt-2"></div>

        @error('doc')
        <span class="help-block m-b-none text-danger">
            {{ @$message }}
        </span>
        @enderror
    </div>
</div>

<script>
    imgInp.onchange = evt => {
        handleFileSelection(evt.target.files, 'image-preview-container', 'image');
    };

    docInp.onchange = evt => {
        handleFileSelection(evt.target.files, 'doc-preview-container', 'document');
    };

    function handleFileSelection(files, containerId, fileType) {
        const previewContainer = document.getElementById(containerId);
        previewContainer.innerHTML = '';

        for (const file of files) {
            const previewElement = document.createElement('div');
            previewElement.className = 'preview-item';

            if (fileType === 'image' && file.type.startsWith('image/')) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.width = 100;
                img.className = 'img-thumbnail mt-1';
                previewElement.appendChild(img);
            } else {
                const icon = document.createElement('i');
                icon.className = fileType === 'image' ? 'fa fa-file-photo-o fa-4x' : getFileIconClass(file);
                const ext = file.name.split('.').pop();
                icon.title = `${fileType === 'image' ? 'Image' : 'File'}: ${file.name} (${ext.toUpperCase()})`;
                previewElement.appendChild(icon);
            }

            previewContainer.appendChild(previewElement);
        }
    }

    function getFileIconClass(file) {
        const ext = file.name.split('.').pop().toLowerCase();
        if (ext === 'pdf') {
            return 'fa fa-file-pdf-o fa-4x';
        } else if (ext === 'doc' || ext === 'docx') {
            return 'fa fa-file-word-o fa-4x';
        } else {
            return 'fa fa-file-photo-o fa-4x'; // Default icon for other file types
        }
    }
</script>
