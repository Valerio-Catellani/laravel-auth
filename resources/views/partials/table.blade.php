<table class="table table-dark table-hover shadow mb-5 mt-3 hype-unselectable hype-table-clickable">
    <thead>
        <tr>
            <th scope="col">#id Project</th>
            <th scope="col">Project Name</th>
            <th scope="col">Created at</th>
            <th scope="col">Categories</th>
            <th scope="col">Techonlogies</th>
            <th scope="col">Amministration Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($elements as $element)
            <tr>
                <td><a>{{ $element->id }} </a></td>
                <td><a>{{ $element->title }}</a></td>
                <td><a>{{ $element->created }}</a></td>
                <td><a>{{ $element->categories }}</a></td>
                <td><a>{{ $element->technologies }}</a>
                </td>
                <td>
                    <span>modifica</span>
                    <span>mostra dettagli</span>
                    <form id="delete-form" action="{{ route('admin.projects.destroy', $element->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="element-delete" class="default-button text-danger hype-text-shadow fs-1"
                            type="submit">
                            <i class="fa-solid fa-trash-can "></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
