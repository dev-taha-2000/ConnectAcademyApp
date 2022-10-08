<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<table class="table"> 
  <tr>
    <th>nome et prenom</th>
    <th>CIN</th>
    <th>formation</th>
    <th>paiment de la formation</th>
    <th>date de inscription</th> 
  </tr>
  <tr>
      @foreach ($students as $item)
      <tr> 
        <td>{{$item->username }}</td>  
        <th>{{$item->CIN}}</th>
        <th>{{$item->formation}}</th>
        <th>{{$item->paimentTotal}} DH</th> 
        <th>{{$item->created_at}}</th>  
      </tr>
      @endforeach
  </tr>
</table>