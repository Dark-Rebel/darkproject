<?php
$grepo = new calculadora();

if (isset($_POST['senado']) or
        isset($_POST['mina']) or
        isset($_POST['pedreira']) or
        isset($_POST['academia']) or
        isset($_POST['porto']) or
        isset($_POST['serraria']) or
        isset($_POST['quartel']) or
        isset($_POST['gruta']) or
        isset($_POST['muralha']) or
        isset($_POST['armazem']) or
        isset($_POST['templo']) or
        isset($_POST['mercado']) or
        isset($_POST['fazenda'])) {

    $grepo->setSenado($_POST['senado']);
    $grepo->setMina($_POST['mina']);
    $grepo->setPedreira($_POST['pedreira']);
    $grepo->setAcademia($_POST['academia']);
    $grepo->setPorto($_POST['porto']);
    $grepo->setSerraria($_POST['serraria']);
    $grepo->setQuartel($_POST['quartel']);
    $grepo->setGruta($_POST['gruta']);
    $grepo->setMuralha($_POST['muralha']);
    $grepo->setArmazem($_POST['armazem']);
    $grepo->setTemplo($_POST['templo']);
    $grepo->setMercado($_POST['mercado']);
    $grepo->setFazenda($_POST['fazenda']);

    $grepo->getResultado();
}
?>
<form method="POST">
    <div class="area1">
        <div class="titulo">Edifícios</div>
        <div class="boxDivisor">
            <div class="boxEdificil" id="senado">
                <div class="boxEdificilN">
                    <input type="number" name="senado" min="1" max="25">
                </div>
                <div class="boxEdificilT">
                    Senado
                </div>
            </div>
        </div>
        <div class="boxDivisor">
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="serraria" min="0" max="40">
                </div>
                <div class="boxEdificilT">
                    Serraria
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="fazenda" min="1" max="45">
                </div>
                <div class="boxEdificilT">
                    Fazenda
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="pedreira" min="0" max="40">
                </div>
                <div class="boxEdificilT">
                    Pedreira
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="armazem" min="1" max="35">
                </div>
                <div class="boxEdificilT">
                    Armazém
                </div>
            </div>
        </div>
        <div class="boxDivisor">
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="mina" min="0" max="40">
                </div>
                <div class="boxEdificilT">
                    Mina
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="quartel" min="0" max="30">
                </div>
                <div class="boxEdificilT">
                    Quartel
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="templo" min="0" max="30">
                </div>
                <div class="boxEdificilT">
                    Templo
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="mercado" min="0" max="30">
                </div>
                <div class="boxEdificilT">
                    Mercado
                </div>
            </div>
        </div>
        <div class="boxDivisor">
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="porto" min="0" max="30">
                </div>
                <div class="boxEdificilT">
                    Porto
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="academia" min="0" max="36">
                </div>
                <div class="boxEdificilT">
                    Academia
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="muralha" min="0" max="25">
                </div>
                <div class="boxEdificilT">
                    Muralha
                </div>
            </div>
            <div class="boxEdificil">
                <div class="boxEdificilN">
                    <input type="number" name="gruta" min="0" max="10">
                </div>
                <div class="boxEdificilT">
                    Gruta
                </div>
            </div>
        </div>
        <div class="boxDivisor">
            <input type="submit" name="enviar" value="Calcular">
            <input type="reset" name="enviar" value="Limpar">
        </div>
    </div>
    <div class="area2">
        <div class="titulo">Resultado</div>
        <div class="resultado"></div>
    </div>
</form>