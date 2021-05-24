<form id="form_subscribe" class="hidden" action="{{$route}}" method="post">
  @csrf
  @method($method ?? 'post')
  <input type="hidden" name="creator_id" value="{{$id}}">
</form>
