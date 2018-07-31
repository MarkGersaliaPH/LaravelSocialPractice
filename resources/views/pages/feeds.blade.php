@extends('welcome')
@section('content')
<br> 
@foreach($feeds as $feed)


<div class="card feed">
        <div class="card-header">
            <div class="row"> 
            <div class="col">
                {{$feed->created_at->diffForHumans()}}
            </div>
            <div class="col text-muted" style="text-align:right">
                <i class="fas fa-ellipsis-h fa-sm"></i> 
            </div>  
            </div>
        </div>
        <div class="card-body">   
                <div class="media">
                        <div class="media-left media-top" style="margin-right:10px;"> 
                            @if($feed->user->profile_picture == null)
                            <img src="http://www.fastrackerzkennel.com/wp-content/uploads/2014/03/male-placeholder-image.jpeg" class="rounded-circle" style="width:40px" alt="">
                            @else
                                <img id="photo" src="{{asset('/storage/uploads/'.$feed->user->profile_picture)}}" class="rounded-circle" style="width:40px" alt="">
                            @endif
                        </div>
                        <div class="media-body">
                          <big class="media-heading"> 
                                {{$feed->user->name}} 
                          </big>
                          <p class="text-muted">{{$feed->user->profile_intro}}</p>
                        </div>                        
                    </div>              
            {!! $feed->post_content !!} 
        </div>

                    @foreach($feed->image as $image) 
                    <img alt="card-image" class="img img-fluid" src="{{'storage/uploads/'.$image->filename}}" alt="">
                    @endforeach  
        
    <div class="card-footer">
        <a class="btn btn-link">
            <i class="far fa-thumbs-up"> </i> Likes 
        </a>
        <a class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
            <i class="far fa-comments"> </i> Comments {{'('. $feed->countComment(). ')' }}  
        </a>
        <a class="btn btn-link">
           <i class="fas fa-share"> </i> Share
        </a>  
    </div>
    
    @foreach($feed->comment as $comment)  
    <div class="media" style="margin:0 15px">
    <div class="media-left media-top" style="margin-right:20px;">
        @if($comment->user->profile_picture == null)
        <img src="http://www.fastrackerzkennel.com/wp-content/uploads/2014/03/male-placeholder-image.jpeg" class="rounded-circle" style="width:40px" alt="">
        @else
            <img id="photo" src="{{asset('/storage/uploads/'.$comment->user->profile_picture)}}" class="rounded-circle" style="width:40px" alt="">
        @endif 
    </div>
    <div class="media-body">
        <div class="media-heading">
            <div class="row">
                <div class="col">
                    <strong>{{$comment->user->name }}</strong>   
                </div>
                <div class="col text-right">
                    {{$comment->created_at->diffForHumans()}}
                </div>
            </div>
        </div>
        
        <p class="text-muted">{{$comment->comment_content }}</p>  
</div>
</div> 
    @endforeach  
</div> 

@endforeach  
@endsection

