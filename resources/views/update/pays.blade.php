<style>
    .monBoutton{
    background-color: #007BFF;
    Color:white;
    font-weight: bold;
    padding: 7px 30px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 5px 10px 0 grey;
    text-decoration: none;
  }
    </style>
<form   method="POST" action="{{ route('Modifier.pays', $pays->id) }}">
@method('PUT')
@csrf
    <input name ="nom" type="text"  value="{{ $pays['id']}}"> 
    <input name ="nom" type="text" value="{{ $pays['nom']}}">
    <button type="submit"class="monBoutton">Update</button>
</form> 