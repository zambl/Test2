
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
        background-color: #003cff;
        Color:white;
        font-weight: bold;
        padding: 7px 30px;
        border-radius: 3px;
        cursor: pointer; 
        box-shadow: 0 5px 10px 0 grey;
        text-decoration: none;
      }
      
    </style>
    
    <h1>Liste Menu</h1>
    <table>
    <tr>
      <td>Pays</td>
        <td>Nom</td>
        <td>Description</td>
        <td>img</td>
        <td>temps préparation</td>
        <td>Option</td>
      
    </tr>
    <tr>
    </tr>
    @foreach ($menus as $menu)
  
    <tr>
      <td>{{$menu->pays->nom}}</td>
        <td>{{$menu['nom']}}</td>
        <td>{{$menu['description']}}</td>
        <td>{{$menu['img']}}</td>
        <td>{{$menu['tempspreparation']}}</td>

       <td>
         <br> <button> <a href="{{route('Delete.Menus',$menu['id'])}}"class="monBoutton">Delete</a> </button> <br><br>
         <br> <button><a href="{{route('Edit.Menus',$menu['id'])}}"class="monBoutton2">Edit</a></button> <br><br>
        
       </td>
      
    </tr>
        
    @endforeach
    
    
    
    </table>