@extends('admin.partials.master')

@section('main_content')

<div class="page-header">
    <a href="admin/blogs/artikel/new" class="btn btn-sm btn-primary pull-right">New</a>
    <h1>
        Artikel
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <div>
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th class="col-sm-2">Created at</th>
                        <th class="col-sm-1">Publish</th>
                        <th class="col-sm-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artikels as $art)
                    <tr>
                        <td class="col-sm-1"></td>
                        <td>{{$art->judul}}</td>
                        <td>{{$art->kategori->nama}}</td>
                        <td>{{$art->created_at}}</td>
                        <td class="center">
                            @if($art->publish == 'Y')
                            <span class="label label-info arrowed-in arrowed-in-right">Publish</span>
                            @else
                            <span class="label label-warning arrowed-in arrowed-in-right">Pending</span>
                            @endif
                        </td>
                        <td class="center">
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="green" href="admin/blogs/artikel/edit/{{$art->id}}">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red btn-delete" href="admin/blogs/artikel/delete/{{$art->id}}" >
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
            aoColumns: [
                {"bSortable": false}, null,null,null, null, {"bSortable": false}
            ],
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