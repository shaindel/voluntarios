<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convocatorias</title>
</head>
<body>
	
    <ul>

        @foreach ($convocatorias as $convocatoria)
            <li>
	            <a href='/convocatorias/{{$convocatoria->id}}'>
	            {{$convocatoria->titulo}}
	            
            </li>
        @endforeach    
    </ul>
</body>
</html>