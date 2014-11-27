@extends('layouts.lte-record-list')

@section('js')
@parent
<script src="{{ asset ("/js/pages/classes/index.js") }}" type="text/javascript"></script>

@endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Classes        
    </h1>
</section>

<section class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <a href="/classes/create">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </th>
                                        <th>ID</th>
                                        <th>Class Name</th>
                                        <th>Year</th>
                                        <th>Level</th>
                                        <th>Level Id</th>
                                        <th>Subject</th>
                                        <th>Teacher</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div><!-- /.col -->                        
                    </div><!-- /.row -->
                </div><!-- ./box-body -->                
            </div><!-- /.box -->            
        </div>
    </div>

</section><!-- /.content -->
@endsection