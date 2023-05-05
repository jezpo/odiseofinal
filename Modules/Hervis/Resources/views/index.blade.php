@extends('hervis::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('hervis.name') !!}
    </p>
    <table>
		<tr>
			<th>Encabezado 1</th>
			<th>Encabezado 2</th>
			<th>Encabezado 3</th>
		</tr>
		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
		</tr>
		<tr>
			<td>4</td>
			<td>5</td>
			<td>6</td>
		</tr>
		<tr>
			<td>7</td>
			<td>8</td>
			<td>9</td>
		</tr>
	</table>
@endsection
