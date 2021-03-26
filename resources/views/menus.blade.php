
<form   method="POST" action="{{ route('Modifier.menus', $menus->id) }}">
@method('PUT')
@csrf
    <input name ="nom" type="text" value="{{ $menus['nom']}}"> 
    <input name ="nom" type="text" value="{{ $menus['description']}}">
    <input name ="nom" type="text" value="{{ $menus['img']}}">
    <input name ="nom" type="text" value="{{ $menus['tempspreparation']}}">
    <button type="submit"class="monBoutton">Update</button>
</form> 