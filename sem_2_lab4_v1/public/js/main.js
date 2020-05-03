$(function () {
    const socket = io();
    $('form').submit(function(e){
      e.preventDefault(); // prevents page reloading
      socket.emit('send message', $('#m').val());
      $('#m').val('');
      return false;
    });
    socket.on('receive message', function(msg){
      $('#messages').append($('<li>').text(msg));
    });
  });