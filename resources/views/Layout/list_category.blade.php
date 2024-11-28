<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Autori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-light">
<main class="container">
    <section class="row">
        <div class="col-md-12 my-4">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/" class="btn btn-secondary">Libri</a>
                <a href="/author" class="btn btn-secondary">Autori</a>
                <a href="/category" class="btn btn-secondary">Categorie</a>
            </div>
            <a href="{{route('category.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi una Categoria</a>
            <h2 class="mt-5 mb-4">Le Categorie</h2>
        </div>
        <div class="col-md-6">
            @yield('category-content')
        </div>
    </section>
</main>
</body>

</html>
