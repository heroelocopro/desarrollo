<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 PDF</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Lista de certificados</h2>
            </div>
            <div class="col-md-4">
                <div class="mb-4 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ URL::to('#') }}">Convertir a PDF</a>
                </div>
                <div class="mb-4 d-flex justify-content-end">
                    {{ $certificados->links() }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <caption>Lista de certificados</caption>
                    <thead>
                      <tr>
                        <th scope="col">Tema de sondeo</th>
                        <th scope="col">Fecha de generacion</th>
                        <th scope="col">Numero de certificacion</th>
                        <th scope="col">Nombres del ciudadano</th>
                        <th scope="col">Apellidos del ciudadano</th>
                        <th scope="col">Numero de documento</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($certificados as $certificado)
                        <tr>
                            <th scope="row">{{ $certificados->tema }}</th>
                            <td>{{ $certificados->fecha_gen }}</td>
                            <td>{{ $certificados->num_cert }}</td>
                            <td>{{ $certificados->nombres }}</td>
                            <td>{{ $certificados->apellidos }}</td>
                            <td>{{ $certificados->num_doc }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>