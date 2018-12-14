<?php include 'components/header.php'; ?>

    <script>
        function moveRelogio(){ 
        momentoAtual = new Date()
        hora = momentoAtual.getHours()
        minuto = momentoAtual.getMinutes()
        horaImprimivel = hora + " : " + minuto
        document.form_relogio.relogio.value = horaImprimivel
        setTimeout("moveRelogio()",1000)
    }
    </script>

    <section class="home">
        <div class="banner">
            <img src="assets/images/banner.jpg" alt="" />
        </div><!-- banner -->
        <div class="dados">
            <div class="conteudo">
                <h1 class="senha">SENHA <span>MP0945</span></h1>
                <h1>GUICHÊ <span>02</span></h1>
                <h2>Nome Usuário</h2>
                <p>Transferência de propriedade e/ou de outros estados - veículos</p>
            </div><!-- conteudo -->
            <h4>SENHAS ANTERIORES</h4>
            <table>
                <tr>
                    <th>SENHA</th>
                    <th>GUICHÊ</th>
                </tr>
                <tr>
                    <td>MP0945</td>
                    <td>06</td>
                </tr>
                <tr>
                    <td>MP0945</td>
                    <td>03</td>
                </tr>
                <tr>
                    <td>MP0945</td>
                    <td>01</td>
                </tr>
            </table>
        </div><!-- dados -->
        <div class="footer">
            <div class="horario">
                <form name="form_relogio"> 
                    <input type="text" name="relogio" size="10"> 
                </form>
            </div><!-- horario -->
            <div class="marquee">
                <marquee class="li" direction=”right”>IPVA placa final 05</marquee>
            </div><!-- marquee -->
            <div class="logo-footer">
                <img src="assets/images/logo-footer.png" alt="" />
            </div><!-- logo-footer -->
        </div><!-- footer -->
    </section><!-- home -->

<?php include 'components/footer.php'; ?>