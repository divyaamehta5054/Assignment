<table border="1" align="center">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Desc</td>
        <td>Action</td>
    </tr>
    
    @foreach($data as $d)
    
    
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->pro_name}}</td>
            <td>{{$d->pro_price}}</td>
            <td>{{$d->pro_desc}}</td>
            <td><a href="delete/{{$d->id}}">Delete</a></td>
        </tr>
    
    @endforeach
</table>