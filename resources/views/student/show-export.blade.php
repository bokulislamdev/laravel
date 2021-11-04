<table>
    <tr>
        <th>serial</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Class</th>
    </tr>
    @foreach($students as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->roll }}</td>
        <td>{{ $item->studentclass->name }}</td>
    </tr>
    @endforeach
</table>