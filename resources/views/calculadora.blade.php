<head>
    <style>
        body{
            font-family:Arial, sans-serif;
            background: #f2f2f2;
            text-align:center;
            margin-top:50px;
        }
        form{
            background:#4e3391;
            padding:20px;
            border-radius:10px;
            display: inline-block;
            box-shadow:#1d063b;
        }
        
    </style>
</head>

<form action="/calcular" method="POST">
    @csrf <input type="number" name="num1" placeholder="Número 1" required>
    
    <select name="operacao">
        <option value="soma">+</option>
        <option value="sub">-</option>
        <option value="mult">*</option>
        <option value="div">/</option>
    </select>

    <input type="number" name="num2" placeholder="Número 2" required>
    <button type="submit">Calcular</button>
</form>

@isset($resultado)
    <h2>Resultado: {{ $resultado }}</h2>
@endisset
