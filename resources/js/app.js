require('./bootstrap');

window.$ = require('jquery');

function getData() {

  $.ajax({

    url: '/api/posts/all',
    method: 'GET',
    success: function(posts) {

      var target = $('#post_append');

      for (var i = 0; i < posts.length; i++) {

       var post = posts[i];
       var html = "<li class='list-group-item'>" + post['title'] + " "
                + "<br>" + 'Like: ' + post['like'] + "</li>";

       target.append(html);
      }
    },
    error: function(err) {

      console.log('err', err);

    }
  })
}

function init() {

  getData();

}

$(document).ready(init);
