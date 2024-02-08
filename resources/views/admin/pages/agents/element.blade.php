<style>
    .preview-item {
        display: inline-block;
        margin-right: 2px;
    }
</style>

<div class="col-md-12">
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Agent Name <span class="required-star">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ isset($agent) ? @$agent->name : old('name')}}">

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
        <label class="col-sm-2 col-form-label">Agent Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" value="{{ isset($agent) ? @$agent->email : old('email')}}">

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
        <label class="col-sm-2 col-form-label">Agent Phone <span class="required-star">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="phone" value="{{ isset($agent) ? @$agent->phone : old('phone')}}">

            @error('phone')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Agent Address</label>
        <div class="col-sm-10">
            <textarea row="3" class="form-control" name="address">{{ isset($agent) ? @$agent->address : old('address')}}</textarea>

            @error('address')
            <span class="help-block m-b-none text-danger">
                    {{ @$message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group  row">
        <label class="col-sm-2 col-form-label">Agent District <span class="required-star">*</span></label>
        <div class="col-sm-10">
            <select name="district_id" class="form-control">
                <option value="">Select District</option>
                @foreach(@$districts as $district)
                    <option value="{{ @$district->id }}" {{ isset($agent) && $agent->district_id == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
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
        <label class="control-label">Agent Photos</label>
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
        <label class="control-label">Agent Documents</label>
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




