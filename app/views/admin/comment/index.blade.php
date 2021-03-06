@extends('admin.partials.master')

@section('main_content')

<div class="page-header">
    <h1>
        Comments
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <div>
            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Artikel</th>
                        <th>Status</th>
                        <th class="col-sm-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $cmt)
                    <tr {{($cmt->status == 'N' ? 'style="font-weight: bold;"':'' )}}>
                        <td class="col-sm-1"></td>
                        <td>{{$cmt->created_at}}</td>
                        <td>{{$cmt->name}}</td>
                        <td>{{$cmt->email}}</td>
                        <td>{{$cmt->website}}</td>
                        <td>{{$cmt->artikel->judul}}</td>
                        <td class="center">
                            @if($cmt->status == 'Y')
                            <span class="label label-info arrowed-in arrowed-in-right">Confirmed</span>
                            @else
                            <span class="label label-warning arrowed-in arrowed-in-right">Waiting Confirmation</span>
                            @endif
                        </td>
                        <td class="center">
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="green" href="admin/comment/edit/{{$cmt->id}}">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red btn-delete" href="admin/comment/delete/{{$cmt->id}}" >
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
                {"bSortable": false}, null,null,null, null,null,null, {"bSortable": false}
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