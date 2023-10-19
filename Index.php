<?php 
    include_once 'php-class/servico.php';
    include_once 'php-action/calcular-gorjeta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorjeta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body class="h-full flex flex-col justify-center items-center content-center py-20 bg-red-500">
    <div class="flex flex-col justify-center items-center content-center text-lg border border-black w-90 h-90 p-10 bg-white shadow-3xl">

    
    <h1 class="text-4xl">Calculadora de Gorjeta</h1>
    <form method="get" class="flex flex-col w-full">
            <label for="valor">Valor da conta:</label>
            <input class="border border-slate-700 rounded px-1" 
            type="number" id="valor" name="valor" step=".01" required>

            <label for="qualidade">Qualidade do atendimento:</label>
            <select class="border border-slate-700 rounded px-1" 
            name="qualidade" id="qualidade" required>
                <option value="10">Execelente 10%</option>
                <option value="8">Otimo 8%</option>
                <option value="5">Bom 5%</option>
                <option value="2">Ruim 2%</option>
            </select>
        <button class="my-2 py-2 rounded bg-emerald-600 hover:bg-emerald-800 transition-colors ease-in" type="submit">Calcular Gojeta</button>
    </form>
    <div class="flex flex-col w-full">
        <label for="valorGorjeta">Valor da Gorjeta</label>
        <input class="border border-slate-700 rounded px-1" 
        type="text" id="valorGorjeta" name="valorGorjeta" value="R$<?=$gorjeta?>"readonly>
        <label for="valorTotal">Valor Total</label>
        <input class="border border-slate-700 rounded px-1"  
        type="text" id="valorTotal" name="valorTotal" value="R$<?=$valorTotal?>"readonly>
    </div>
    </div>
</body>
</html>