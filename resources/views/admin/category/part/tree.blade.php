<!-- resources/views/admin/category/part/tree.blade.php -->
@foreach ($categories as $category)
    <tr>
        <td style="padding-left: {{ $level * 20 }}px;">{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
            <a href="{{ route('admin.category.edit', ['category' => $category->id]) }}">
                <i class="fas fa-edit"></i>
            </a>
        </td>
        <td>
            <form action="{{ route('admin.category.destroy', ['category' => $category->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="page" value="{{ request()->get('page', 1) }}">
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </td>
    </tr>
    @if ($category->children->isNotEmpty())
        @include('admin.category.part.tree', ['categories' => $category->children, 'level' => $level + 1])
    @endif
@endforeach
