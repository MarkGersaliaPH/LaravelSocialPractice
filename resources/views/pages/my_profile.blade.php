@extends('layouts.profile')
 
@section('content')

<h1 style="margin-bottom:30px;">My profile</h1>
<form action="/update_profile" method="post" enctype="multipart/form-data">
    
    {{csrf_field()}}
<table style="width:50%">
    <tr>
        <td><label for="">Profile photo</label></td>
        <td>
            <div class="form-group">
            @if($profile_data->profile_picture == null)
                <img id="photo" src="http://www.fastrackerzkennel.com/wp-content/uploads/2014/03/male-placeholder-image.jpeg" style="width:100px" alt="">
            @else
            <img id="photo" src="{{asset('/storage/uploads/'.$profile_data->profile_picture)}}" style="width:100px" alt="">
       
            @endif
            </div>
            <input type="file" name="photo" id="imgInp">
        </div> 
        </td> 
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><label for="">Profile intro:</label></td>
        <td><textarea type="text" class="form-control" name="intro" />{{$profile_data->profile_intro}}</textarea></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><label for="">Name:</label></td>
        <td><input type="text" class="form-control" name="name" value="{{$profile_data->name}}" /></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><label for="">Email:</label></td>
        <td><input type="email" class="form-control" name="email" value="{{$profile_data->email}}" /></td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-success">Save Changes</button></td>
    </tr>
    
</table>
</form>


<script type="text/javascript">
    function readURL(input) {
   if (input.files && input.files[0]) {
       var reader = new FileReader();
       
       reader.onload = function (e) {
           $('#photo').attr('src', e.target.result);
       }
       
       reader.readAsDataURL(input.files[0]);
   }
}

$("#imgInp").change(function(){
   readURL(this);
});
 </script>

@endsection