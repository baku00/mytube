function postComment() {
  var app_url = document.getElementById('app-url').href
  var http = new XMLHttpRequest();
  http.open('post',app_url+'comment',true)
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  http.onload = function(datas){
    console.log(datas);
  }
  var _token = document.getElementsByName('_token')[0].value
  var comment = document.getElementById('comment').value
  var video_id = document.getElementById('video_id').value
  var datas = '_token='+_token+'&comment='+comment+'&video_id='+video_id;
  console.log(datas);
  http.send(datas)
}
