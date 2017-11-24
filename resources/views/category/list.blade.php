Ma Liste de catégories...

@foreach($categories as $category)
    <p>This is Category : {{ $category->label }}</p>
@endforeach