@extends('admin.partials.master')

@section('main_content')

<div class="page-header">
    <h1>Homepage Setting</h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-cogs bigger-120"></i>
                        Page Setting
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#messages">
                        <i class="green ace-icon fa fa-picture-o bigger-120"></i>
                        Image Slider
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#destination">
                        <i class="green ace-icon fa fa-briefcase bigger-120"></i>
                        Paket Wisata Favorit
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#car">
                        <i class="green ace-icon fa fa-car bigger-120"></i>
                        Best Deal Rental Mobil
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#hotel">
                        <i class="green ace-icon fa fa-building bigger-120"></i>
                        Best Deal Hotel
                    </a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <form class="form-horizontal" method="POST" action="{{URL::to('admin/homepage/update')}}" >
                        <table class="table table-bordered">
                            <tr>
                                <td class="col-sm-3">
                                    Welcome page description
                                </td>
                                <td>
                                    <textarea name="welcom_say" class="full">{{$homepage->welcome_say}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-3">
                                    Top Tagline
                                </td>
                                <td>
                                    <textarea name="tagline" class="full">{{$homepage->tagline}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-2">
                                    Set visibile to "Our customer say" ?
                                </td>
                                <td>
                                    {{Form::select('show_customer_say',array('Y'=>'Visible','N'=>'Hide'),$homepage->show_customer_say,array('class'=>'col-sm-2'))}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-2" colspan="2">
                                    <b>SIDEBAR SETTING</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-2">
                                    Find a destination <br>
                                    {{Form::checkbox('find_a_dest_show', $homepage->find_a_dest_show, $homepage->find_a_dest_show == 'Y' ? true : false)}} Visible
                                </td>
                                <td>
                                    Header : {{Form::text('find_a_dest_head',$homepage->find_a_dest_head,array('class'=>'col-sm-12'))}} <br/>
                                    Sub header : {{Form::text('find_a_dest_desc',$homepage->find_a_dest_desc,array('class'=>'col-sm-12'))}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-2">
                                    Read news <br>
                                    {{Form::checkbox('read_news_show', $homepage->read_news_show, $homepage->read_news_show == 'Y' ? true : false)}} Visible
                                </td>
                                <td>
                                    Header : {{Form::text('read_news_head',$homepage->read_news_head,array('class'=>'col-sm-12'))}} <br/>
                                    Sub header : {{Form::text('read_news_desc',$homepage->read_news_desc,array('class'=>'col-sm-12'))}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-2">
                                    Buy travel guides <br>
                                    {{Form::checkbox('buy_travel_guide_show', $homepage->buy_travel_guide_show, $homepage->buy_travel_guide_show == 'Y' ? true : false)}} Visible
                                </td>
                                <td>
                                    Header : {{Form::text('buy_travel_guide_head',$homepage->buy_travel_guide_head,array('class'=>'col-sm-12'))}} <br/>
                                    Sub header : {{Form::text('buy_travel_guide_desc',$homepage->buy_travel_guide_desc,array('class'=>'col-sm-12'))}}
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-2">
                                    What they say <br>
                                    {{Form::checkbox('what_they_say_show', $homepage->what_they_say_show, $homepage->what_they_say_show == 'Y' ? true : false)}} Visible
                                </td>
                                <td>
                                    Header : {{Form::text('what_they_say_head',$homepage->what_they_say_head,array('class'=>'col-sm-12'))}} <br/>
                                    Sub header : {{Form::text('what_they_say_desc',$homepage->what_they_say_desc,array('class'=>'col-sm-12'))}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Save homepage setting
                                </td>
                                <td>
                                    <button class="btn btn-info" type="submit" >
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Save
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

                <div id="messages" class="tab-pane fade">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="col-sm-2" colspan="2">
                                    <b>IMAGE SLIDER</b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" >
                                    <div class="col-sm-6 " style="border:thin solid lightgrey;padding: 5px;"  >
                                        <img id="sld-img" width="100%" src="images/slider/blank_image.jpg"/>
                                        <h3 id="sld-title" style="color: white;position: absolute;right: 50%;margin-right: 5%;top: 10%;">Sample Title</h3>
                                        <h6 id="sld-subtitle"  style="color: white;position: absolute;right: 50%;margin-right: 5%;top: 25%;">sample sub title</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        {{Form::hidden('sld_id',null,array('class'=>'col-sm-12'))}}
                                        <table class="table table-bordered hide" id="table-slider-edit">
                                            <tbody>
                                                <tr>
                                                    <td>Nama *1920x400 px</td>
                                                    <td>{{Form::text('upd_image',null,array('class'=>'col-sm-12','readonly'))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Title</td>
                                                    <td>{{Form::text('upd_title',null,array('class'=>'col-sm-12'))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sub Title</td>
                                                    <td>{{Form::text('upd_sub',null,array('class'=>'col-sm-12'))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Link</td>
                                                    <td>{{Form::text('upd_link',null,array('class'=>'col-sm-12'))}}</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary ">Update</a>
                                                        <a id="btn-new-slider" class="btn btn-sm btn-success pull-right">Cancel</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <?php echo Form::open(array('url' => URL::to('admin/homepage/addslider'), 'files' => true, 'class' => 'form-horizontal')); ?>
                                        <table class="table table-bordered" id="table-slider-new">
                                            <tbody>
                                                <tr>
                                                    <td>Nama *1920x400 px</td>
                                                    <td>
                                                        {{Form::file('image_slider_upl',array('id'=>'image_slider_upl','required'))}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Title</td>
                                                    <td>{{Form::text('new_title',null,array('class'=>'col-sm-12'))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Subtitle</td>
                                                    <td>{{Form::text('new_subtitle',null,array('class'=>'col-sm-12'))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Link</td>
                                                    <td>{{Form::text('new_link',null,array('class'=>'col-sm-12'))}}</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <button type="submit" class="btn btn-sm btn-primary ">Save</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php echo Form::close(); ?>

                                    </div>
                                    <div class="col-sm-12" style="margin-top: 10px;">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Sub Title</th>
                                                    <th class="hide">Link</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sldrownum = 1; ?>
                                                @foreach($sliders as $sld)
                                                <tr>
                                                    <td>{{$sldrownum++}}</td>
                                                    <td>
                                                        <a id="sld-img-{{$sld->id}}" href="{{$sld->link}}">{{$sld->img_name}}</a>
                                                    </td>
                                                    <td id="sld-title-{{$sld->id}}" >{{$sld->title}}</td>
                                                    <td id="sld-sub-{{$sld->id}}" >{{$sld->subtitle}}</td>
                                                    <td id="sld-link-{{$sld->id}}" class="hide">{{$sld->link}}</td>
                                                    <td style="text-align: center;">
                                                        <a class="btn-edit-slider btn-edit-sld btn btn-xs btn-success" id="{{$sld->id}}"  href="#" >Edit</a>
                                                        <a class="btn-delete-slider btn btn-xs btn-warning" id="{{$sld->id}}"  href="#" >Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table> 
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="destination" class="tab-pane fade">
                    <!--Input Paket Wisata--> 
                    <table class="table table-bordered {{count($favdests)>4 ? 'hide':''}}" id="table-klik-tambah-paket-wisata">
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle;">
                                    Tampilkan "Favourite Destination" : &nbsp;
                                    {{Form::select('is_show_favdest',array('Y'=>'Tampilkan','N'=>'Tidak ditampilkan'),$homepage->best_deal_wisata_show)}}
                                    <a class="btn btn-success btn-sm" id="btn-update-status-favdest-visibility"><i class="fa fa-save"></i></a>
                                </td>
                                <td>
                                    <a id="btn-pilih-paket-wisata" class="btn btn-success btn-xs">Klik untuk memilih paket wisata...</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="table-paket-wisata" class="hide table table-bordered">
                        <tbody>
                            <tr >
                                <td class="col-sm-2" rowspan="3">
                                    <img class="col-sm-12" id="img-paket-wisata"/>
                                </td>
                                <td>
                                    <b>Nama : </b> <spam id="nama-paket-wisata"></spam>
                        </td>
                        </tr>
                        <tr>
                            <td >
                                <b>Harga : </b><span id="harga-paket-wisata"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-danger btn-sm " id="btn-cancel-paket-wisata">Batal</a>
                                <a class="btn btn-info btn-sm " id="btn-tambah-paket-wisata">Tambahkan paket wisata ini</a>                                
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered" id="tabel-paket-wisata-favorit">
                        <thead>
                            <tr>
                                <th class="col-sm-1">No</th>
                                <th class="col-sm-3">Foto</th>
                                <th>Nama</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $rownum = 1; ?>
                            @foreach($favdests as $fav)
                            <tr>
                                <td>{{$rownum++}}</td>
                                <td>
                                    <img class="col-sm-12" src="images/paket/{{$fav->travpack->img_1}}"/>
                                </td>
                                <td>
                                    {{$fav->travpack->nama}}<br/>
                                    <b>Price : {{$fav->travpack->price}}</b>
                                </td>
                                <td class="center">
                                    <div class="hidden-sm hidden-xs action-buttons"> 
                                        <a paket-id="{{$fav->travpack_id}}" class="btn btn-sm btn-danger btn-delete-paket-wisata" href="#" > 
                                            Delete
                                        </a> 
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="car" class="tab-pane fade">
                    <table class="table table-bordered {{count($bestcars)>4 ? 'hide':''}}" id="table-klik-tambah-rental-mobil">
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle;">
                                    Tampilkan "Best Deal Rent Car" : &nbsp;
                                    {{Form::select('is_show_rental',array('Y'=>'Tampilkan','N'=>'Tidak ditampilkan'),$homepage->best_deal_rental_show)}}
                                    <a class="btn btn-success btn-sm" id="btn-update-status-rental-visibility"><i class="fa fa-save"></i></a>
                                </td>
                                <td >
                                    <a id="btn-pilih-rental-mobil" class="btn btn-success">Klik untuk memilih data rental mobil...</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="table-rental-mobil" class="hide table table-bordered">
                        <tbody>
                            <tr >
                                <td class="col-sm-2" rowspan="3">
                                    <img class="col-sm-12" id="img-rental-mobil"/>
                                </td>
                                <td>
                                    <b>Nama : </b> <spam id="nama-rental-mobil"></spam>
                        </td>
                        </tr>
                        <tr>
                            <td >
                                <b>Harga : </b><span id="harga-rental-mobil"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-danger btn-sm " id="btn-cancel-rental-mobil">Batal</a>
                                <a class="btn btn-info btn-sm " id="btn-tambah-rental-mobil">Tambahkan paket wisata ini</a>                                
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered" id="tabel-rental-mobil-favorit">
                        <thead>
                            <tr>
                                <th class="col-sm-1">No</th>
                                <th class="col-sm-3">Foto</th>
                                <th>Nama</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $rownum = 1; ?>
                            @foreach($bestcars as $car)
                            <tr>
                                <td>{{$rownum++}}</td>
                                <td>
                                    <img class="col-sm-12" src="images/car/{{$car->car->foto_1}}"/>
                                </td>
                                <td>
                                    {{$car->car->nama}}
                                    <br>
                                    <b>Price : {{$car->car->price}}</b>
                                </td>
                                <td class="center">
                                    <div class="hidden-sm hidden-xs action-buttons"> 
                                        <a paket-id="{{$car->car_id}}" class="btn btn-sm btn-danger btn-delete-rental-mobil" href="#" > 
                                            Delete
                                        </a> 
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="hotel" class="tab-pane fade">
                    <table class="table table-bordered {{count($besthotels)>4 ? 'hide':''}}" id="table-klik-tambah-hotel">
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle;">
                                    Tampilkan "Best Deal Hotel" : &nbsp;
                                    {{Form::select('is_show_hotel',array('Y'=>'Tampilkan','N'=>'Tidak ditampilkan'),$homepage->best_deal_hotel_show)}}
                                    <a class="btn btn-success btn-sm" id="btn-update-status-hotel-visibility"><i class="fa fa-save"></i></a>
                                </td>
                                <td >
                                    <a id="btn-pilih-hotel" class="btn btn-success">Klik untuk memilih data hotel...</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="table-hotel" class="hide table table-bordered">
                        <tbody>
                            <tr >
                                <td class="col-sm-2" rowspan="3">
                                    <img class="col-sm-12" id="img-hotel"/>
                                </td>
                                <td>
                                    <b>Nama : </b> <spam id="nama-hotel"></spam>
                        </td>
                        </tr>
                        <tr>
                            <td >
                                <b>Harga : </b><span id="harga-hotel"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-danger btn-sm " id="btn-cancel-hotel">Batal</a>
                                <a class="btn btn-info btn-sm " id="btn-tambah-hotel">Tambahkan paket wisata ini</a>                                
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered" id="tabel-hotel-favorit">
                        <thead>
                            <tr>
                                <th class="col-sm-1">No</th>
                                <th class="col-sm-3">Foto</th>
                                <th>Nama</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $rownum = 1; ?>
                            @foreach($besthotels as $hotel)
                            <tr>
                                <td>{{$rownum++}}</td>
                                <td>
                                    <img class="col-sm-12" src="images/hotel/{{$hotel->hotel->foto_1}}"/>
                                </td>
                                <td>
                                    {{$hotel->hotel->nama}}
                                    <br>
                                    <b>Price : {{$hotel->hotel->price}}</b>
                                </td>
                                <td class="center">
                                    <div class="hidden-sm hidden-xs action-buttons"> 
                                        <a paket-id="{{$hotel->hotel_id}}" class="btn btn-sm btn-danger btn-delete-hotel" href="#" > 
                                            Delete
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
        <!-- PAGE CONTENT BEGINS -->
        <div>



        </div>
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<div id="modal-form-paket-wisata" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Pilih Paket Wisata</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <!--                <button class="btn btn-sm btn-primary">
                                    <i class="ace-icon fa fa-check"></i>
                                    Pilih
                                </button>-->
            </div>
        </div>
    </div>
</div>

<div id="modal-form-rental-mobil" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Pilih Rental Mobil</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal-form-hotel" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Pilih Hotel</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var sldid;
        $('.btn-edit-slider').click(function (e) {
            e.preventDefault();
            //show table input edit
            $('#table-slider-new').fadeOut(150, function () {
                $('#table-slider-edit').removeClass('hide');
                $('#table-slider-edit').show();
            });
            //
            sldid = $(this).attr('id');
            edit(sldid);
        });
        function edit(id) {
            $('input[name=upd_image]').val($('#sld-img-' + id).text());
            $('input[name=upd_title]').val($('#sld-title-' + id).text());
            $('input[name=upd_sub]').val($('#sld-sub-' + id).text());
            $('input[name=upd_link]').val($('#sld-link-' + id).text());
            $('input[name=sld_id]').val(id);
            //change image
            $('#sld-img').hide();
            $('#sld-img').attr('src', 'images/slider/' + $('input[name=upd_image]').val());
            $('#sld-title').text($('input[name=upd_title]').val());
            $('#sld-subtitle').text($('input[name=upd_sub]').val());
            $('#sld-img').fadeIn(500);
            //scrol to view image
//            $('#sld-img').scrollIntoView()
            var aTag = $("#table-slider-edit");
            $('html,body').animate({scrollTop: aTag.offset().top}, 'slow');
        }

        /**
         * Add new slider
         */
        $('#btn-new-slider').click(function () {
            //hide edit panel
            $('#table-slider-edit').fadeOut(150, function () {
                $('#table-slider-new').removeClass('hide');
                $('#table-slider-new').show();
                //change image to blank
                $('#sld-img').hide();
                $('#sld-img').attr('src', 'images/slider/blank_image.jpg');
                $('#sld-img').fadeIn(500);
                //change title and subtitle
                $('#sld-title').text('Type title');
                $('#sld-subtitle').text('type subtitle');
            });
        });
        /**
         * Binding new slider
         */
        $('input[name=new_title]').keyup(function (e) {
            $('#sld-title').text($(this).val());
        });
        $('input[name=new_subtitle]').keyup(function () {
            $('#sld-subtitle').text($(this).val());
        });
        // image preview from local disk
        $('#image_slider_upl').on('change', function (ev) {
            var f = ev.target.files[0];
            var fr = new FileReader();
            fr.onload = function (ev2) {
                console.dir(ev2);
                $('#sld-img').attr('src', ev2.target.result);
            };
            fr.readAsDataURL(f);
        });
        /**
         * Delete slider
         */
        $('.btn-delete-slider').click(function (e) {
            var trgr = $(this);
            e.preventDefault();
            if (confirm('Anda akan menghapus data ini?')) {
                id = $(this).attr('id');
                $.get('admin/homepage/deleteslider/' + id, null, function (e) {
                    trgr.parent().parent().fadeOut();
                });
            }

        });
        /**
         * SCRIPT FOR PAKET WISATA FAVORIT
         * ===========================================================
         */
        //update visibility paket wisata
        $('#btn-update-status-favdest-visibility').click(function(){
           var val= $('select[name=is_show_favdest]').val();
           var url = "{{URL::to('admin/homepage/visiblefavdest')}}";
           $.post(url,{
               isvisible:val
           },function(){
               alert('Data updated');
           }).fail(function(){
               alert('Gagal update');
           });
        });
        
        //tampikian dialog pilih paket wisata
        $('#btn-pilih-paket-wisata').click(function () {
            //load data
            var url = "{{URL::to('admin/homepage/paketwisata')}}";
            $('#modal-form-paket-wisata .modal-body .row').empty();
            $('#modal-form-paket-wisata .modal-body .row').load(url, null, function () {
                $('#modal-form-paket-wisata').modal();
            });
        });
        //get paket wisata yang dipilih
        var newPaket = [];
        var tablePaketWisataRowNum = "{{count($favdests)+1}}";
        var newPaketTemp;

        $(document).on('click', '.btn-pilih', function () {
            if (tablePaketWisataRowNum < 5) {
                newPaketTemp = paketwisata[$(this).attr('arridx')];

                //tampilkan ke tabel table-paket-wisata
                $('#table-paket-wisata').removeClass('hide');
                $('#img-paket-wisata').attr('src', 'images/paket/' + newPaketTemp.img_1);
                $('#nama-paket-wisata').text(newPaketTemp.nama);
                $('#harga-paket-wisata').text(newPaketTemp.price);
            } else {

            }

        });

        //Tambahkan paket wisata ke JSON Array dan tampilkan ke table
        $('#btn-tambah-paket-wisata').click(function () {
            //tambahkan ke database
            var url = "admin/homepage/addfavdest";
            $.post(url, {
                'travpack_id': newPaketTemp.id
            }, function () {

            }).fail(function (e) {
                alert('Gagal simpan ke database');
            });
            //tambahkan ke Json Array
            newPaket.push(newPaketTemp);
//            tampilkan ke table
            $('#tabel-paket-wisata-favorit tbody').append(
                    '<tr>' +
                    '<td>' + tablePaketWisataRowNum++ + '</td>' +
                    '<td><img class="col-sm-12" src="images/paket/' + newPaketTemp.img_1 + '" /></td>' +
                    '<td>' + newPaketTemp.nama + '<br>' + '<b>Price : ' + newPaketTemp.price + '</b></td>' +
                    '<td class="center">' +
                    '<div class="hidden-sm hidden-xs action-buttons">' +
                    '<a paket-id="' + newPaketTemp.id + '" class="btn btn-sm btn-danger btn-delete-paket-wisata" href="#" >Delete</a>' +
                    '</div>' +
                    '</td>' +
                    '</tr>'
                    );
            //sembunyikan table paket wisata
            $('#table-paket-wisata').addClass('hide');
        });
        //batalkan penambahan paket wisata
        $('#btn-cancel-paket-wisata').click(function () {
            //sembunyikan table paket wisata
            $('#table-paket-wisata').addClass('hide');
        });
        //hapus paket wisata favorit
        $(document).on('click', '.btn-delete-paket-wisata', function (e) {
            e.preventDefault();
            var paketId = $(this).attr('paket-id');
            var thisRow = $(this).parent('div').parent('td').parent('tr');

            //delete from database
            if (confirm('Anda akan menghapus data ini?')) {
                var url = "{{URL::to('admin/homepage/deletefavdest')}}" + "/" + paketId;
                $.get(url, null, function () {
                    alert('Paket wisata favorit deleted');

                });
                //delete row on tabel
                thisRow.fadeOut(500);
            }

        });
        /**
         * ===========================================================
         * END OF SCRIPT FOR PAKET WISATA FAVORIT
         */

        /**
         * SCRIPT UNTUK RENTAL MOBIL
         * ===========================================================
         */
        //update visibility rental mobil
        $('#btn-update-status-rental-visibility').click(function(){
           var val= $('select[name=is_show_rental]').val();
           var url = "{{URL::to('admin/homepage/visiblerental')}}";
           $.post(url,{
               isvisible:val
           },function(){
               alert('Data updated');
           }).fail(function(){
               alert('Gagal update');
           });
        });
        //tampikian dialog pilih rental mobil
        $('#btn-pilih-rental-mobil').click(function () {
            //load data
            var url = "{{URL::to('admin/homepage/rentalmobil')}}";
            $('#modal-form-rental-mobil .modal-body .row').empty();
            $.get(url, null, function (e) {
                $('#modal-form-rental-mobil .modal-body .row').html(e);
                $('#modal-form-rental-mobil').modal();
            }).fail(function (e) {
                alert('gagal');
                alert(e);
            });
        });
        //get rental mobil yang dipilih
        var newRental = [];
        var tableRentalMobilRowNum = "{{count($bestcars)+1}}";
        var newRentalTemp;

        $(document).on('click', '.btn-pilih-rental-mobil', function () {
            if (tableRentalMobilRowNum < 5) {

                newRentalTemp = rentalmobil[$(this).attr('arridx')];

                //tampilkan ke tabel table-rental-mobil
                $('#table-rental-mobil').removeClass('hide');
                $('#img-rental-mobil').attr('src', 'images/car/' + newRentalTemp.foto_1);
                $('#nama-rental-mobil').text(newRentalTemp.nama);
                $('#harga-rental-mobil').text(newRentalTemp.price);
            } else {

            }

        });

        //Tambahkan rental mobil ke JSON Array dan tampilkan ke table
        $('#btn-tambah-rental-mobil').click(function () {
            //tambahkan ke database
            var url = "admin/homepage/addbestcar";
            $.post(url, {
                'car_id': newRentalTemp.id
            }, function () {

            }).fail(function (e) {
                alert('Gagal simpan ke database');
            });
            //tambahkan ke Json Array
            newRental.push(newRentalTemp);
//            tampilkan ke table
            $('#tabel-rental-mobil-favorit tbody').append(
                    '<tr>' +
                    '<td>' + tableRentalMobilRowNum++ + '</td>' +
                    '<td><img class="col-sm-12" src="images/car/' + newRentalTemp.foto_1 + '" /></td>' +
                    '<td>' + newRentalTemp.nama + '<br>' + '<b>Price : ' + newRentalTemp.price + '</b></td>' +
                    '<td class="center">' +
                    '<div class="hidden-sm hidden-xs action-buttons">' +
                    '<a paket-id="' + newRentalTemp.id + '" class="btn btn-sm btn-danger btn-delete-rental-mobil" href="#" >Delete</a>' +
                    '</div>' +
                    '</td>' +
                    '</tr>'
                    );
            //sembunyikan table rental mobil
            $('#table-rental-mobil').addClass('hide');
        });
        //batalkan penambahan rental mobil
        $('#btn-cancel-rental-mobil').click(function () {
            //sembunyikan table rental mobil
            $('#table-rental-mobil').addClass('hide');
        });
        //hapus rental mobil favorit
        $(document).on('click', '.btn-delete-rental-mobil', function (e) {
            e.preventDefault();
            var paketId = $(this).attr('paket-id');
            var thisRow = $(this).parent('div').parent('td').parent('tr');

            //delete from database
            if (confirm('Anda akan menghapus data ini?')) {
                var url = "{{URL::to('admin/homepage/deletebestcar')}}" + "/" + paketId;
                $.get(url, null, function () {
                    alert('Rental mobil favorit deleted');

                });
                //delete row on tabel
                thisRow.fadeOut(500);
            }

        });
        /**
         * ===========================================================
         * END OF SCRIPT UNTUK RENTAL MOBIL
         */


        /**
         * SCRIPT UNTUK HOTEL
         * ===========================================================
         */
        //update visibility hotel
        $('#btn-update-status-hotel-visibility').click(function(){
           var val= $('select[name=is_show_hotel]').val();
           var url = "{{URL::to('admin/homepage/visiblehotel')}}";
           $.post(url,{
               isvisible:val
           },function(){
               alert('Data updated');
           }).fail(function(){
               alert('Gagal update');
           });
        });
        //tampikian dialog pilih hotel
        $('#btn-pilih-hotel').click(function () {
            //load data
            var url = "{{URL::to('admin/homepage/hotel')}}";
            $('#modal-form-hotel .modal-body .row').empty();
            $.get(url, null, function (e) {
                $('#modal-form-hotel .modal-body .row').html(e);
                $('#modal-form-hotel').modal();
            }).fail(function (e) {
                alert('gagal');
                alert(e);
            });
        });
        //get hotel yang dipilih
        var newHotel = [];
        var tableHotelRowNum = "{{count($besthotels)+1}}";
        var newHotelTemp;

        $(document).on('click', '.btn-pilih-hotel', function () {
            if (tableHotelRowNum < 5) {

                newHotelTemp = hotel[$(this).attr('arridx')];

                //tampilkan ke tabel table-hotel
                $('#table-hotel').removeClass('hide');
                $('#img-hotel').attr('src', 'images/hotel/' + newHotelTemp.foto_1);
                $('#nama-hotel').text(newHotelTemp.nama);
                $('#harga-hotel').text(newHotelTemp.price);
            } else {

            }

        });

        //Tambahkan hotel ke JSON Array dan tampilkan ke table
        $('#btn-tambah-hotel').click(function () {
            //tambahkan ke database
            var url = "admin/homepage/addhotel";
            $.post(url, {
                'hotel_id': newHotelTemp.id
            }, function () {
                //simpan berhasil maka tampilkan ke table
                //tambahkan ke Json Array
                newHotel.push(newHotelTemp);
                //tampilkan ke table
                $('#tabel-hotel-favorit tbody').append(
                        '<tr>' +
                        '<td>' + tableHotelRowNum++ + '</td>' +
                        '<td><img class="col-sm-12" src="images/hotel/' + newHotelTemp.foto_1 + '" /></td>' +
                        '<td>' + newHotelTemp.nama + '<br>' + '<b>Price : ' + newHotelTemp.price + '</b></td>' +
                        '<td class="center">' +
                        '<div class="hidden-sm hidden-xs action-buttons">' +
                        '<a paket-id="' + newHotelTemp.id + '" class="btn btn-sm btn-danger btn-delete-hotel" href="#" >Delete</a>' +
                        '</div>' +
                        '</td>' +
                        '</tr>'
                        );
                //sembunyikan table hotel
                $('#table-hotel').addClass('hide');
            }).fail(function (e) {
                alert('Gagal simpan ke database');
            });

        });
        //batalkan penambahan hotel
        $('#btn-cancel-hotel').click(function () {
            //sembunyikan table hotel
            $('#table-hotel').addClass('hide');
        });
        //hapus hotel favorit
        $(document).on('click', '.btn-delete-hotel', function (e) {
            e.preventDefault();
            var paketId = $(this).attr('paket-id');
            var thisRow = $(this).parent('div').parent('td').parent('tr');

            //delete from database
            if (confirm('Anda akan menghapus data ini?')) {
                var url = "{{URL::to('admin/homepage/deletehotel')}}" + "/" + paketId;
                $.get(url, null, function () {
                    alert('Hotel  favorit deleted');

                });
                //delete row on tabel
                thisRow.fadeOut(500);
            }

        });
        /**
         * ===========================================================
         * END OF SCRIPT UNTUK HOTEL
         */
    });
</script>
@stop