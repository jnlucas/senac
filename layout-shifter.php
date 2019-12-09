<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Senac  | EAD</title>
</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
<style>
body {
  margin: 0;
}
.container {
  margin: 0;
  padding: 0;
  width: 100%;
}
.content{
    text-align: center;
    min-height: 200px;
}



</style>
<body>

<div class="container">
    <div class="content col1">
      Conteudo div 1
    </div>
    <div class="col2">
        <div class="content col3">
          Conteudo div 3
        </div>
        <div class="content col4">
          Conteudo div 4
        </div>

    </div>


<div>
<script>
$(function(){
  $(".content").each(function(index,data){
    var color = "#"+((1<<24)*Math.random()|0).toString(16)
    $(data).css("background",color);
  })
})
</script>
</body>
</html>
