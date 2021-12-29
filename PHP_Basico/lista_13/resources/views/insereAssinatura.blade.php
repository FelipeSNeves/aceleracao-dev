<h1>Cadastrar Assinatura</h1>

<hr>

<form action="{{route('assinatura.inserir')}}" method="POST">

    @csrf

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <input type="text" name="assinaturaPadrao" id="assinaturaPadrao" value="" placeholder="Assinatura Padrao">
    
    <br>    
    <br>
    
    <input type="number" name="qtdCaracteresAssinatura" id="qtdCaracteresAssinatura" value="" placeholder="qtd Caracteres Assinatura" readonly>
    
    <br>    
    <br>
    
    <input type="number" name="qtdVezesAssinaturaUsada" min="1" value="" placeholder="qtdVezes Assinatura Usada">
    
    <br>    
    <br>


    
    <button type="submit">Adicionar</button>
</form>


<script>
    $('#assinaturaPadrao').keyup(function(){
        var texto = $('#assinaturaPadrao').val();
        var qtdCaracteresAssinatura = texto.length;
        $('#qtdCaracteresAssinatura').val(qtdCaracteresAssinatura);
    })
</script>