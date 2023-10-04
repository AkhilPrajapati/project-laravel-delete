
<h1>Members List</h1>
<table border="12" style="background-color: khaki">
    <tr>
        <td>#ID</td>
        <td>NAME</td>
        <td>E-MAIL</td>
        <td>ADDRESS</td>
        <td>OPERATIONS</td>
    </tr>
    @foreach ($members as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td>
            <a href={{'/delete/'.$item['id']}}>Delete</a>
            <a href={{'/edit/'.$item['id']}}>Edit</a>
        </td>
    </tr>
    @endforeach
</table>
