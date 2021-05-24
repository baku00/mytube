var video = document.getElementById('video-card').childNodes[1]

function createVideoCard(miniature,title,id,comment_number,like_number,dislike_number) {
  var video = this.video
  var href = video.getElementsByClassName('model-title')[0].href;

  video.getElementsByClassName('model-miniature')[0].src = miniature;
  video.getElementsByClassName('model-miniature')[0].alt = miniature;
  video.getElementsByClassName('model-title')[0].href = href.replace('<<-ROUTE->>',id);
  video.getElementsByClassName('model-title')[0].textContent = title;
  video.getElementsByClassName('model-comment_number')[0].textContent = comment_number;
  video.getElementsByClassName('model-like_number')[0].textContent = like_number;
  video.getElementsByClassName('model-dislike_number')[0].textContent = dislike_number;

  return video
}
