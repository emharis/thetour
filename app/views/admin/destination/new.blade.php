@extends('admin.partials.master')

@section('main_content')

<div class="page-header">
    <a href="{{URL::previous()}}" class="btn btn-sm btn-success pull-right"><i class="fa fa-angle-double-left"></i> Back</a>

    <h1>New Destination</h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">

        <!-- PAGE CONTENT BEGINS -->
        <div>

            <form class="form-horizontal" method="POST" action="{{URL::to('admin/destination/new')}}" enctype="multipart/form-data" >
                <table class="table table-bordered">
                    <tbody>
                        
                        <tr>
                            <td>Nama</td>
                            <td colspan="2">
                                <input name="nama" type="text" placeholder="Nama" class="col-sm-12"  required />
                            </td>
                        </tr>
                        <tr>
                            <td>Subtitle</td>
                            <td colspan="2">
                                <input name="subtitle" type="text" placeholder="Subtitle" class="col-sm-12"   />
                            </td>
                        </tr>
                        <tr>
                            <td>Kategori Lokasi</td>
                            <td class="col-sm-6">
                                {{Form::select('destkat', $seldest,null,array('class'=>'col-sm-4'))}}
                            </td>
                            <td rowspan="4" class="col-sm-4" style="text-align: center;">
                                <img id="img_upl_prev" width="50%"/>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Kategori Wisata</td>
                            <td>
                                {{Form::select('kategori', $selkat,null,array('class'=>'col-sm-4'))}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Image Cover<br>
                                *260x168px
                            </td>
                            <td>
                                {{Form::file('img_path',array('id'=>'img_upl'))}}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td colspan="2">
                                <textarea name="desc" class="full"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <button class="btn btn-info" type="submit" onclick="$(this).hide()" >
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Save
                                </button>
                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    Reset
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<script type="text/javascript">
    $(document).ready(function(){
       // image preview from local disk
        $('#img_upl').on('change', function (ev) {
            var f = ev.target.files[0];
            var fr = new FileReader();

            fr.onload = function (ev2) {
                console.dir(ev2);
                $('#img_upl_prev').attr('src', ev2.target.result);
            };

            fr.readAsDataURL(f);
        });
    });
</script>
@stop