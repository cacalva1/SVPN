@extends('adminlte::page')
@extends('estilos.table_responsive')
@section('title', 'Gestión personal policial')
@section('content_header')

<h1>Gestión Personal Policial</h1>
@stop
@section('content')

<div class="card">
    <div class="float-right">
        <a href="{{ route('policias.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
            {{ __('Nuevo') }}
        </a>
        <button class="btn btn-success btn-sm" id="exportToExcel">
            <i class="fas fa-file-excel"></i> Exportar a Excel
        </button>
        <button class="btn btn-danger btn-sm" id="exportToPDF">
            <i class="fas fa-file-pdf"></i> Exportar a PDF
        </button>


    </div>
    <div class="card-body">
        @php
        $heads = ['No', 'Cedula','Nombres','Apellidos','Fecha Nacimiento','Tipo Sangre','Ciudad Nacimiento','Celular','Rango','Estado', ['label' => 'Acciones', 'no-export' => true, 'width' => 15]];

        $btnEdit = '';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
            <i class="fa fa-lg fa-fw fa-eye"></i>
        </button>';

        $config = [
        'responsive' => true,
        'language' => ['url' => 'http://localhost/SVPN/public/dist/js/es-Es.json'],
        ];
        @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" :config="$config" class="table table-striped table-bordered">
            @foreach ($policias as $policia)
            <tr>
                <td>{{ $policia->id }}</td>
                <td>{{ $policia->cedula }}</td>
                <td>{{ $policia->nombres }}</td>
                <td>{{ $policia->apellidos }}</td>
                <td>{{ $policia->fecha_nacimiento }}</td>
                <td>{{ $policia->tipo_sangre }}</td>
                <td>{{ $policia->ciudad_nacimiento }}</td>
                <td>{{ $policia->celular }}</td>
                <td>{{ $policia->rango }}</td>
                <td>{{ $policia->estado }}</td>
                <td>
                    <form action="{{ route('policias.destroy', $policia->id) }}" method="POST">
                        <a class="btn btn-sm btn-primary " href="{{ route('policias.show', $policia->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                        <a class="btn btn-sm btn-success" href="{{ route('policias.edit', $policia->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </x-adminlte-datatable>

    </div>
</div>

<head>
    <!-- Otras etiquetas head... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('exportToExcel').addEventListener('click', function() {
            // Obtener la tabla por su id
            const table = document.getElementById('table1');

            // Obtener los datos actuales de la tabla
            const allData = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            // Obtener las cabeceras
            const headerRow = table.getElementsByTagName('thead')[0].getElementsByTagName('tr')[0];
            const headers = Array.from(headerRow.cells).map(cell => cell.innerText.trim());

            // Excluir la columna 'Acciones' de las cabeceras
            headers.pop();

            if (allData.length > 0) {
                const jsonData = Array.from(allData).map(row => {
                    const rowData = [];
                    Array.from(row.cells).forEach(cell => {
                        rowData.push(cell.innerText.trim());
                    });
                    return rowData;
                });

                // Añadir las cabeceras ajustadas a la primera fila del conjunto de datos
                jsonData.unshift(headers);

                const ws = XLSX.utils.aoa_to_sheet(jsonData);
                const wb = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(wb, ws, 'Policias');
                XLSX.writeFile(wb, 'policias.xlsx');
            } else {
                console.error('Error: No data available for export.');
            }
        });
        document.getElementById('exportToPDF').addEventListener('click', function() {
            const table = document.getElementById('table1');

            html2canvas(table).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jsPDF('p', 'mm', 'a4');

                // Ajusta el tamaño de la imagen en el PDF según sea necesario
                const pdfWidth = 210;
                const pdfHeight = (canvas.height * pdfWidth) / canvas.width;

                // Ajusta la posición de la imagen (cambia el valor de offsetY según sea necesario)
                const offsetY = 30;
                pdf.addImage(imgData, 'PNG', 0, offsetY, pdfWidth, pdfHeight, undefined, 'FAST');

                // Establece los bordes de la imagen en 0 para quitarlos
                pdf.setLineWidth(0);

                // Agrega un título al PDF
                const title = 'Reporte Personal Policial';
                const titleFontSize = 16;

                // Calcula la posición del título
                const titleX = pdfWidth / 2;
                const titleY = 15; // Ajusta la posición del título respecto a la imagen

                pdf.setFontSize(titleFontSize);
                pdf.text(title, titleX, titleY, 'center');

                pdf.save('policias.pdf');
            });
        });
    });
</script>
@stop