
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>

    <div class='container'>
<br>
    <div class="image" >
        @foreach($image as $i)
        @if($i!=null)
<center>
    <img src="/images/{{$i->image}}" width=400" height="200">
</center>
        @endif
        @endforeach
      </div>
        <br>
       <center>
        </center>
          <div class="jumbotron mt-4">
            <h2><b>ログイン</b></h2>
          <br>
          <form action="/arazon/login" method="post">
            <div class="form-group">
            @csrf
              <label for="exampleInputName"><b>メールアドレスまたは電話番号</b></label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>

            <div class="form-group">
              <label for="exampleInputPass"><b>パスワード</b></label>
              <input type="text" name="pass" class="form-control" id="exampleInputPassword">
            </div>

            <div class="form-group form-check"></div>
            <input type="submit" name='send' value="ログイン" class="btn btn-outline-dark bg-warning btn-block">
            <small class="text-muted">
            続行することで、当社の利用規約および<span class='bluetext'>プライバシー</span>規約に同意するものとみなされます。
            </small>
          </form>
          </div>
      </div>

 <!-- Bootstrap Javascript(jQuery含む) -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
