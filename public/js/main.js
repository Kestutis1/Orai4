$(".botn").bind("click", function(){
  $("#exampleFormControlFile1").click();
  explode();
});

function explode(){
  setTimeout("$('#botnfile').addClass('nerodyti');", 2000);
}
