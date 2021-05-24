<form id="form_{{@$prefix}}like" action="{{$liked !== null ? route(@$prefix.'like.destroy',$id) : route(@$prefix.'like.store')}}" method="post">
  @csrf
  @if($liked !== null)
    <input type="hidden" id="form_{{@$prefix}}like_method" name="_method" value="delete">
  @endif
  <input type="hidden" name="video_id" value="{{$video->id}}">
</form>
