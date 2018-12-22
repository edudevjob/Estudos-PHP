<?=get('message')?>

<form action="/pages/forms/contato.php" method="POST" role="form">
    <legend>Formulário de Contato</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu Nome!!!">
    </div>
    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail!!!">
    </div>
    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Digite o Assunto!!!">
    </div>
    <div class="form-group">
  <label for="comment">Mensagem</label>
  <textarea class="form-control" rows="5" name="message"></textarea>
</div>
    <button type="submit" class="btn btn-success">Enviar</button>

</form>
