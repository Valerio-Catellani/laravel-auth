<table class="table table-dark table-hover shadow my-5 hype-unselectable hype-table-clickable">
    <thead>
        <tr>
            <th scope="col">#id Project</th>
            <th scope="col">Project Name</th>
            <th scope="col">Created at</th>
            <th scope="col">Programming Lenguages</th>
            <th scope="col">Frameworks</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($elements as $element)
            <tr>
                <td><a href="{{ route('projects.show', $element->id) }}">{{ $element->id }} </a></td>
                <td class="d-none d-lg-table-cell"><a
                        href="{{ route('projects.show', $element->id) }}">{{ $element->name }}</a></td>
                <td class="d-none d-lg-table-cell"><a
                        href="{{ route('projects.show', $element->id) }}">{{ $element->created }}</a></td>
                <td><a href="{{ route('projects.show', $element->id) }}">{{ $element->programming_languages }}</a></td>
                <td><a href="{{ route('projects.show', $element->id) }}">{{ $element->frameworks }}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
