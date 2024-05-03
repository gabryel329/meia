<!DOCTYPE html>
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

</html>
