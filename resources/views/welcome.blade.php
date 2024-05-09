{{-- <!DOCTYPE html>
    <html class="wide wow-animation" lang="en">
    
<head>
    <!-- Site Title-->
    <title>Campeonato Brasileiro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div style="align-items: center">
            <article class="heading-component">
                <div class="heading-component-inner">
                    <h5 class="heading-component-title">Campeonato Brasileiro</h5>
                </div>
            </article>
            <div class="table-custom-responsive">
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th colspan="1">GOLEIROS</th>
                            <th>PAÍS</th>
                            <th>TIME</th>
                            <th>V</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $index => $row)
                        @if ($index != 0)
                        <tr>
                            <td>{{ $index }}</td>
                            <!-- Incorporar a imagem ao lado do nome do time na mesma célula -->
                            <td >
                                {{ $row[1] }} <!-- Nome do time -->
                            </td>
                            <!-- Loop através de outras células excluindo a primeira que contém o nome -->
                            @foreach ($row as $cell_index => $cell)
                            @if ($cell_index != 1) <!-- Pular o índice do nome do time para não duplicar -->
                                <td>{{ $cell }}</td>
                            @endif
                            @endforeach
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html> --}}
<!DOCTYPE html>
    <html class="wide wow-animation" lang="en">
    
<head>
    <!-- Site Title-->
    <title>Melhores Meia de Todos os Tempos</title>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">
        <div style="text-align: center">
            <h1>Melhores Meia de Todos os Tempos</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th colspan="1">Nome</th>
                            <th>País</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $row)
                        @if ($index != 0 and $index != 1) <!-- Excluir a primeira linha -->
                        <tr>
                            <td>{{ $index - 1 }}</td>
                            <td>{{ $row['nome'] }}</td>
                            <td>{{ $row['pais']  }}</td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
