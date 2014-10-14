@extends('layouts.lte-module')

@section('js')
@parent
<script type='text/javascript'>
    var teacherId = '{{$teacher->id}}';
</script>
<script src="{{ asset ("/js/image-utils.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/js/pages/teachers/form.js") }}" type="text/javascript"></script>
@endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Section
        <small>
            {{ ($mode == "ADD" ? "Create New" : "Update") }}
        </small>       
    </h1>
</section>

<section class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-body">
                    <form class="fields-container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label for="input-teacher-image">Profile Image</label>
                                    <input type="file" id="input-teacher-image" name="image">
                                    <p class="help-block">Ideal size is 250px x 250px</p>

                                    <img src="{{ $teacher->image_url  ? URL::to('/') . $teacher->image_url : "" }}" width="250px" height="250px" id="image-preview">
                                    <input type="hidden" name="image_url">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" required name="name" class="form-control" value="{{ $teacher->first_name }}">
                                </div>
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" required name="name" class="form-control" value="{{ $teacher->middle_name }}">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" required name="name" class="form-control" value="{{ $teacher->last_name }}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- ./box-body -->
                <div class="box-footer">
                    @include('module.parts.actions')
                </div>
            </div><!-- /.box -->            
        </div>
    </div>

</section><!-- /.content -->
@endsection