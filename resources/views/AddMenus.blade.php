<style>
    .monBoutton{
    background-color: #ff0000;
    Color:white;
    font-weight: bold;
    padding: 7px 30px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 5px 10px 0 grey;
    text-decoration: none;
  }
  </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1>Create Menus</h1>
    <form  method="POST" action={{route('store.menus')}}>
      @csrf 
    <select name= "pays">
        @foreach($pays as $pay)
          <option value={{$pay->id}}>{{ $pay->nom }}</option>
        @endforeach
    </select>  
  <label>Nom</label>
  <input type="text" name="nom" />
  @error('nom')
  <span>{{$message}}</span>
  @enderror
  <br>
  <br>
  <label>Description</label>
  <input type="text" name="description" />
  @error('description')
  <span>{{$message}}</span>
  @enderror
  <br>
  <br>
  <label>image</label>
  <input type="text" name="image" />
  @error('image')
  <span>{{$message}}</span>
  @enderror
  <br>
  <br>
  <label>temps préparation</label>
  <input type="text" name="tempspreparation" />
  @error('tempspreparation')
  <span>{{$message}}</span>
  @enderror
  <br>
  <br>
  <button type="submit"class="monBoutton">AddMenus</button>
  {{@csrf_field()}}
    </form>
</body>
</html>