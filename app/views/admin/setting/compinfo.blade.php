<form class="form-horizontal" method="POST" action="{{URL::to('admin/setting/compinfo')}}" enctype="multipart/form-data">
<table class="table table-bordered">
    <tbody>
        <tr>
            <td>Company Name</td>
            <td colspan="2">
                <input value="{{$compinfo->comp_name}}" type="text" name="comp_name" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Logo</td>
            <td>
                {{Form::file('img_upl',array('id'=>'img_upl'))}}
            </td>
            <td class="col-sm-2" rowspan="3">
                <img id="img_upl_prev"  src="" width="133" />
            </td>
        </tr>
        <tr>
            <td>Infor Email</td>
            <td>
                <input value="{{$compinfo->email}}" type="text" name="email" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td >
                <input value="{{$compinfo->address}}" type="text" name="address" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Website</td>
            <td colspan="2">
                <input value="{{$compinfo->website}}" type="text" name="website" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Website Title</td>
            <td colspan="2">
                <input value="{{$compinfo->web_title}}" type="text" name="web_title" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td colspan="2">
                <input value="{{$compinfo->phone}}" type="text" name="phone" class="col-sm-12" />
            </td>
        </tr>
<!--        <tr>
            <td>Workphone</td>
            <td colspan="2">
                <input type="text" name="workphone" class="col-sm-12" />
            </td>
        </tr>-->
        <tr>
            <td>Fax</td>
            <td colspan="2">
                <input value="{{$compinfo->fax}}" type="text" name="fax" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Facebook</td>
            <td colspan="2">
                <input value="{{$compinfo->facebook}}" type="text" name="facebook" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Twitter</td>
            <td colspan="2">
                <input value="{{$compinfo->twitter}}" type="text" name="twitter" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Path</td>
            <td colspan="2">
                <input value="{{$compinfo->path}}" type="text" name="path" class="col-sm-12" />
            </td>
        </tr>
<!--        <tr>
            <td>LinkedIn</td>
            <td colspan="2">
                <input  type="text" name="linkedin" class="col-sm-12" />
            </td>
        </tr>-->
        <tr>
            <td>Youtube</td>
            <td colspan="2">
                <input value="{{$compinfo->youtube}}" type="text" name="youtube" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Tumblr</td>
            <td colspan="2">
                <input value="{{$compinfo->tumblr}}" type="text" name="tumblr" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td>Instagram</td>
            <td colspan="2">
                <input value="{{$compinfo->instagram}}" type="text" name="instagram" class="col-sm-12" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-xs" id="btn-save-compinfo">SAVE</button>
            </td>
        </tr>

    </tbody>
</table>
</form>

<!--<script>
    $(document).ready(function () {
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
        
        //save company inf
        $('#btn-save-compinfo').click(function(){
            var url = "{{URL::to('admin/setting/compinfo')}}";
           $.post(url,{
               'comp_name':$('input[name=comp_name]').val(),
               'email':$('input[name=email]').val(),
               'address':$('input[name=address]').val(),
               'website':$('input[name=website]').val(),
               'web_title':$('input[name=web_title]').val(),
               'phone':$('input[name=phone]').val(),
               'fax':$('input[name=fax]').val(),
               'facebook':$('input[name=facebook]').val(),
               'twitter':$('input[name=twitter]').val(),
               'path':$('input[name=path]').val(),
               'youtube':$('input[name=youtube]').val(),
               'tumblr':$('input[name=tumblr]').val(),
               'instagram':$('input[name=instagram]').val()
           },function(data){
               alert('Company Info saved');
//               $('#gagal').html(data);
           }).fail(function(data){
               alert('Save data failed.');
//               $('#gagal').html(data);
           });
        });
    })
</script>-->