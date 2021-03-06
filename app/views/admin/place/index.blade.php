@extends('admin.partials.master')

@section('main_content')

<div class="page-header">
    <a href="admin/destination/place/new" class="btn btn-sm btn-primary pull-right">New</a>
    <h1>
        Place
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <div>
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th class="col-sm-1">No</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Province</th>
                        <th class="col-sm-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($places as $plc)
                    <tr>
                        <td class="col-sm-1"></td>
                        <td>{{$plc->nama}}</td>
                        <td>{{$plc->city->nama}}</td>
                        <td>{{$plc->city->province->nama}}</td>
                        <td class="center">
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="green" href="admin/destination/place/edit/{{$plc->id}}">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red btn-delete" href="admin/destination/place/delete/{{$plc->id}}" >
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.btn-delete').click(function (e) {
            if(confirm('Anda yakin akan menghapus data ini?')){
                
            }else{
                e.preventDefault();
            }
        });

        $('.datatable').dataTable({
            bAutoWidth: false,
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            "bSort": false,
            aaSorting: [],
            fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                // Bold the grade for all 'A' grade browsers
                var index = iDisplayIndexFull + 1;
                $('td:eq(0)', nRow).html(index);
                return nRow;
            }
        });
    });
</script>
@stop