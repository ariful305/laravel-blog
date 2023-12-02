
{{-- =================================================================
                    Category Add|edit|delete alert
================================================================= --}}

@if (session('category_add'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("category_add") }}',
'success'
)
</script>
@endif

@if (session('category_update'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("category_update") }}',
'success'
)
</script>
@endif

@if (session('category_delete'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("category_delete") }}',
'success'
)
</script>
@endif

{{-- =================================================================
                    Tag
================================================================= --}}

@if (session('tag_add'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("tag_add") }}',
'success'
)
</script>
@endif

@if (session('tag_update'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("tag_update") }}',
'success'
)
</script>
@endif

@if (session('tag_delete'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("tag_delete") }}',
'success'
)
</script>
@endif

{{-- =================================================================
                    Post
================================================================= --}}

@if (session('post_add'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("post_add") }}',
'success'
)
</script>
@endif

@if (session('post_update'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("post_update") }}',
'success'
)
</script>
@endif

@if (session('post_delete'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("post_delete") }}',
'success'
)
</script>
@endif
{{-- =================================================================
                    Contact form
================================================================= --}}

@if (session('contact'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("contact") }}',
'success'
)
</script>
@endif

@if (session('contact_delete'))
<script>
    Swal.fire(
'Congratulation!',
'{{ session("contact_delete") }}',
'success'
)

</script>
@endif
