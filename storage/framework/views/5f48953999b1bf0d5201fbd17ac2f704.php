<form action="/calcular" method="POST">
    <?php echo csrf_field(); ?> <input type="number" name="num1" placeholder="Número 1" required>
    
    <select name="operacao">
        <option value="soma">+</option>
        <option value="sub">-</option>
        <option value="mult">*</option>
        <option value="div">/</option>
    </select>

    <input type="number" name="num2" placeholder="Número 2" required>
    <button type="submit">Calcular</button>
</form>

<?php if(isset($resultado)): ?>
    <h2>Resultado: <?php echo e($resultado); ?></h2>
<?php endif; ?><?php /**PATH /home/renato/calculadora/resources/views/calculadora.blade.php ENDPATH**/ ?>