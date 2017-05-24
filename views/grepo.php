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

    <table>
        <tr>
            <td>Senado:</td> 
            <td><input type="number" name="senado" min="1" max="25"></td>
        </tr>
        <tr>
            <td>Fazenda: </td> 
            <td><input type="number" name="fazenda" min="1" max="45"></td> 
            <td>Armazém: </td> 
            <td><input type="number" name="armazem" min="1" max="35"></td> 
            <td>Academia: </td> 
            <td><input type="number" name="academia" min="0" max="36"></td> 
            <td>Serraria: </td> 
            <td><input type="number" name="serraria" min="0" max="40"></td> 
        </tr>
        <tr>
            <td>Pedreira: </td> 
            <td><input type="number" name="pedreira" min="0" max="40"></td> 
            <td>Mina: </td>
            <td><input type="number" name="mina" min="0" max="40"></td>
            <td>Mercado: </td>
            <td><input type="number" name="mercado" min="0" max="30"></td>
            <td>Templo: </td>
            <td><input type="number" name="templo" min="0" max="30"></td>
        </tr>
        <tr>
            <td>Quartel: </td>
            <td><input type="number" name="quartel" min="0" max="30"></td>
            <td>Porto: </td>
            <td><input type="number" name="porto" min="0" max="30"></td>
            <td>Muralha: </td>
            <td><input type="number" name="muralha" min="0" max="25"></td>
            <td>Gruta: </td>
            <td><input type="number" name="gruta" min="0" max="10"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="enviar"></td>
        </tr>
    </table>
</form>