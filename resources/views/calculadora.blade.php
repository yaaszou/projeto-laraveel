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