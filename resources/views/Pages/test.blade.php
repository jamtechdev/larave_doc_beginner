@php
    $name = ['test', 'test', 'test'];

@endphp

<script>
    var data = @json($name);
    data.forEach(element => {
        console.log(element)

    });
    console.log(data)
</script>
