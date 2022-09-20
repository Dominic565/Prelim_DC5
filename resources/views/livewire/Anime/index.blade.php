<div class="banshee">
    <table class=" table table-striped shadow border border-light">
        <thead class="table table-striped bg-secondary">
            <tr>
                <th>Author</th>
                <th>Email</th>
                <th>Description</th>
                <th>Episode</th>
                <th>Year_Released</th>
                <th>Edit</th>
                <th>Delete</th>
           
            </tr>
        </thead>
        <tbody>
            @foreach ($animes as $anime)
                <tr >
                    <td>{{ $anime->author }}</td>
                    <td>{{ $anime->email }}</td>
                    <td>{{ $anime->description }}</td>
                    <td>{{ $anime->episode }}</td>
                    <td>{{ $anime->year_released }}</td>
                    <td>
                        <a href="{{ url('edit', ['anime' => $anime->id]) }}" class="btn btn-primary" id="ic" title="Edit"><i class=" ">Edit</i></a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['anime' => $anime->id]) }}" class="btn btn-danger" id="ic" title="Delete"><i class=" ">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    
</style>
