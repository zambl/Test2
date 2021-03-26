
<style>
table {
border: medium solid #000000;
width: 30%;
}
td, th {
border: thin solid #000000;
width: 40%;
}
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
  .monBoutton2{
    background-color: #0059ff;
    Color:white;
    font-weight: bold;
    padding: 7px 30px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 5px 10px 0 grey;
    text-decoration: none;
  }
  
</style>

<h1>Liste Pays</h1>
<table>
<tr>
    <td>Id</td>
    <td>Nom</td>
    <td>Option</td>
  
</tr>
<tr>
</tr>
@foreach ($pays as $pay)

<tr>
    <td>{{$pay['id']}}</td>
    <td>{{$pay['nom']}}</td>
   <td>
     <br> <button> <a href="{{route('Delete.pays',$pay['id'])}}"class="monBoutton">Delete</a> </button> <br>
     <br> <button><a href="{{route('Edit.pays',$pay['id'])}}"class="monBoutton2">Edit</a></button> <br>
    
   </td>
  
</tr>
    

@endforeach



</table>