@extends('admin.partials.master')

@section('main_content')

<div class="page-header">
    <a href="admin/blogs/artikel" class="btn btn-sm btn-success pull-right"><i class="fa fa-angle-double-left"></i> Back</a>

    <h1>Edit Artikel</h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">

        <!-- PAGE CONTENT BEGINS -->
        <div>

            <form class="form-horizontal" method="POST" action="{{URL::to('admin/blogs/artikel/edit')}}" enctype="multipart/form-data">
                {{Form::hidden('artikelId',$artikel->id)}}
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="col-sm-2">Judul</td>
                            <td>
                                <input name="judul" value="{{$artikel->judul}}" type="text" placeholder="Judul" class="col-xs-10 col-sm-12"  required />
                            </td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>
                                {{Form::select('kategori',$kategoris,$artikel->kategori_id,array('class'=>'col-xs-4'))}}
                            </td>
                        </tr>
                        <tr>
                            <td>Sub Konten</td>
                            <td>
                                <textarea name="subkonten" class="mini">{{$artikel->sub_konten}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Konten</td>
                            <td>
                                <textarea name="konten" class="full">{{$artikel->konten}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Image Header<br/>
                                <?php echo Form::checkbox('image_is_url', true, ($artikel->image_is_url == 'true' ? true : false), array('id' => 'ckisurl')) ?>Image is URL?
                            </td>
                            <td>
                                @if($artikel->image_is_url == 'true')
                                <input name="image" type="file" accept="image/*" class="hide" />
                                <input value="{{$artikel->imageurl}}" name="imageurl" type="text" class="col-xs-10 col-sm-12"  />
                                @else
                                <input name="image" type="file" accept="image/*" />
                                <input value="{{$artikel->imageurl}}" name="imageurl" type="text" class="hide col-xs-10 col-sm-12"  />
                                @endif
                                * Ukuarn gambar 816x282 px
                            </td>
                        </tr>
                        @if($artikel->imageurl != '')
                        <tr>
                            <td></td>
                            <td>

                                <a href="{{$artikel->imageurl}}" data-rel="colorbox" class="cboxElement">
                                    <img width="200"  src="{{$artikel->thumbimg}}">
                                </a><br/>
                                <a id="button-delete-image" class="btn btn-xs btn-warning">Delete Image</a>
                            </td>
                        </tr>
                        @endif
                        <tr>
                            <td>Publish</td>
                            <td>
                                <select class="form-control" name="publish" required >
                                    <option {{$artikel->publish == 'N' ? 'selected':''}} value="N">Don't Publish</option>
                                    <option {{$artikel->publish == 'Y' ? 'selected':''}} value="Y">Publish it NOW!!!</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
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
    $(document).ready(function () {
        $('#ckisurl').change(function () {
            if ($(this).is(":checked")) {
                $('input[name=imageurl]').removeClass('hide');
                $('input[name=image]').addClass('hide');
            } else {
                $('input[name=imageurl]').addClass('hide');
                $('input[name=image]').removeClass('hide');
            }
            ;
        });

        //delete image
        $('#button-delete-image').click(function () {
            var delUrl = "{{URL::to('admin/blogs/artikel/deleteimage/'.$artikel->id)}}";
            $.get(delUrl, null, function (data) {
                alert('Image deleted');
                $('.cboxElement').hide(500);
                $('#button-delete-image').parent('td').parent('tr').hide(500);
            }).failed(function (data) {
                alert('Gagal delete image');
            });
        });

        var colorbox_params = {
            rel: 'colorbox',
            reposition: true,
            scalePhotos: true,
            scrolling: false,
            previous: '<i class="ace-icon fa fa-arrow-left"></i>',
            next: '<i class="ace-icon fa fa-arrow-right"></i>',
            close: '&times;',
            current: '{current} of {total}',
            maxWidth: '100%',
            maxHeight: '100%',
            onOpen: function () {
                $overflow = document.body.style.overflow;
                document.body.style.overflow = 'hidden';
            },
            onClosed: function () {
                document.body.style.overflow = $overflow;
            },
            onComplete: function () {
                $.colorbox.resize();
            }
        };
        $('.cboxElement').colorbox(colorbox_params);

    });
</script>
@stop