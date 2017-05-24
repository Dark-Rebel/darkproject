<?php

class calculadora {

    private $senado;
    private $serraria;
    private $fazenda;
    private $pedreira;
    private $armazem;
    private $mina;
    private $quartel;
    private $templo;
    private $mercado;
    private $porto;
    private $academia;
    private $muralha;
    private $gruta;

    public function setSenado($temp) {
        switch ($temp) {
            case 1: $temp = 1.0;
                break;
            case 2: $temp = 2.8;
                break;
            case 3: $temp = 5.2;
                break;
            case 4: $temp = 8.0;
                break;
            case 5: $temp = 11.2;
                break;
            case 6: $temp = 14.7;
                break;
            case 7: $temp = 18.5;
                break;
            case 8: $temp = 22.6;
                break;
            case 9: $temp = 27.0;
                break;
            case 10: $temp = 31.6;
                break;
            case 11: $temp = 36.5;
                break;
            case 12: $temp = 41.6;
                break;
            case 13: $temp = 46.9;
                break;
            case 14: $temp = 52.4;
                break;
            case 15: $temp = 58.1;
                break;
            case 16: $temp = 64.0;
                break;
            case 17: $temp = 70.1;
                break;
            case 18: $temp = 76.4;
                break;
            case 19: $temp = 82.8;
                break;
            case 20: $temp = 89.4;
                break;
            case 21: $temp = 96.2;
                break;
            case 22: $temp = 103.2;
                break;
            case 23: $temp = 110.3;
                break;
            case 24: $temp = 117.6;
                break;
            case 25: $temp = 125.0;
                break;
        }

        $this->senado = $temp;
    }

    public function setSerraria($temp) {
        switch ($temp) {
            case 1: $temp = 1.0;
                break;
            case 2: $temp = 2.4;
                break;
            case 3: $temp = 3.9;
                break;
            case 4: $temp = 5.7;
                break;
            case 5: $temp = 7.5;
                break;
            case 6: $temp = 9.4;
                break;
            case 7: $temp = 11.4;
                break;
            case 8: $temp = 13.5;
                break;
            case 9: $temp = 15.6;
                break;
            case 10: $temp = 17.8;
                break;
            case 11: $temp = 20.0;
                break;
            case 12: $temp = 22.3;
                break;
            case 13: $temp = 24.7;
                break;
            case 14: $temp = 27.1;
                break;
            case 15: $temp = 29.5;
                break;
            case 16: $temp = 32.0;
                break;
            case 17: $temp = 34.5;
                break;
            case 18: $temp = 37.1;
                break;
            case 19: $temp = 39.7;
                break;
            case 20: $temp = 42.3;
                break;
            case 21: $temp = 45.0;
                break;
            case 22: $temp = 47.6;
                break;
            case 23: $temp = 50.4;
                break;
            case 24: $temp = 53.1;
                break;
            case 25: $temp = 55.9;
                break;
            case 26: $temp = 58.7;
                break;
            case 27: $temp = 61.5;
                break;
            case 28: $temp = 64.4;
                break;
            case 29: $temp = 67.3;
                break;
            case 30: $temp = 70.2;
                break;
            case 31: $temp = 73.1;
                break;
            case 32: $temp = 76.1;
                break;
            case 33: $temp = 79.1;
                break;
            case 34: $temp = 82.1;
                break;
            case 35: $temp = 85.1;
                break;
            case 36: $temp = 88.2;
                break;
            case 37: $temp = 91.3;
                break;
            case 38: $temp = 94.3;
                break;
            case 39: $temp = 97.5;
                break;
            case 40: $temp = 100.6;
                break;
        }
        $this->serraria = $temp;
    }

    public function setFazenda($temp) {
        $temp = 0;
        $this->fazenda = $temp;
    }

    public function setPedreira($temp) {
        switch ($temp) {
            case 1: $temp = 1.0;
                break;
            case 2: $temp = 2.4;
                break;
            case 3: $temp = 3.9;
                break;
            case 4: $temp = 5.7;
                break;
            case 5: $temp = 7.5;
                break;
            case 6: $temp = 9.4;
                break;
            case 7: $temp = 11.4;
                break;
            case 8: $temp = 13.5;
                break;
            case 9: $temp = 15.6;
                break;
            case 10: $temp = 17.8;
                break;
            case 11: $temp = 20.0;
                break;
            case 12: $temp = 22.3;
                break;
            case 13: $temp = 24.7;
                break;
            case 14: $temp = 27.1;
                break;
            case 15: $temp = 29.5;
                break;
            case 16: $temp = 32.0;
                break;
            case 17: $temp = 34.5;
                break;
            case 18: $temp = 37.1;
                break;
            case 19: $temp = 39.7;
                break;
            case 20: $temp = 42.3;
                break;
            case 21: $temp = 45.0;
                break;
            case 22: $temp = 47.6;
                break;
            case 23: $temp = 50.4;
                break;
            case 24: $temp = 53.1;
                break;
            case 25: $temp = 55.9;
                break;
            case 26: $temp = 58.7;
                break;
            case 27: $temp = 61.5;
                break;
            case 28: $temp = 64.4;
                break;
            case 29: $temp = 67.3;
                break;
            case 30: $temp = 70.2;
                break;
            case 31: $temp = 73.1;
                break;
            case 32: $temp = 76.1;
                break;
            case 33: $temp = 79.1;
                break;
            case 34: $temp = 82.1;
                break;
            case 35: $temp = 85.1;
                break;
            case 36: $temp = 88.2;
                break;
            case 37: $temp = 91.3;
                break;
            case 38: $temp = 94.3;
                break;
            case 39: $temp = 97.5;
                break;
            case 40: $temp = 100.6;
                break;
        }
        $this->pedreira = $temp;
    }

    public function setArmazem($temp) {
        $temp = 0;
        $this->armazem = $temp;
    }

    public function setMina($temp) {
        switch ($temp) {
            case 1: $temp = 1.0;
                break;
            case 2: $temp = 2.4;
                break;
            case 3: $temp = 3.9;
                break;
            case 4: $temp = 5.7;
                break;
            case 5: $temp = 7.5;
                break;
            case 6: $temp = 9.4;
                break;
            case 7: $temp = 11.4;
                break;
            case 8: $temp = 13.5;
                break;
            case 9: $temp = 15.6;
                break;
            case 10: $temp = 17.8;
                break;
            case 11: $temp = 20.0;
                break;
            case 12: $temp = 22.3;
                break;
            case 13: $temp = 24.7;
                break;
            case 14: $temp = 27.1;
                break;
            case 15: $temp = 29.5;
                break;
            case 16: $temp = 32.0;
                break;
            case 17: $temp = 34.5;
                break;
            case 18: $temp = 37.1;
                break;
            case 19: $temp = 39.7;
                break;
            case 20: $temp = 42.3;
                break;
            case 21: $temp = 45.0;
                break;
            case 22: $temp = 47.6;
                break;
            case 23: $temp = 50.4;
                break;
            case 24: $temp = 53.1;
                break;
            case 25: $temp = 55.9;
                break;
            case 26: $temp = 58.7;
                break;
            case 27: $temp = 61.5;
                break;
            case 28: $temp = 64.4;
                break;
            case 29: $temp = 67.3;
                break;
            case 30: $temp = 70.2;
                break;
            case 31: $temp = 73.1;
                break;
            case 32: $temp = 76.1;
                break;
            case 33: $temp = 79.1;
                break;
            case 34: $temp = 82.1;
                break;
            case 35: $temp = 85.1;
                break;
            case 36: $temp = 88.2;
                break;
            case 37: $temp = 91.3;
                break;
            case 38: $temp = 94.3;
                break;
            case 39: $temp = 97.5;
                break;
            case 40: $temp = 100.6;
                break;
        }
        $this->mina = $temp;
    }

    public function setQuartel($temp) {
        switch ($temp) {
            case 1: $temp = 1.0;
                break;
            case 2: $temp = 2.5;
                break;
            case 3: $temp = 4.2;
                break;
            case 4: $temp = 6.1;
                break;
            case 5: $temp = 8.1;
                break;
            case 6: $temp = 10.3;
                break;
            case 7: $temp = 12.5;
                break;
            case 8: $temp = 14.9;
                break;
            case 9: $temp = 17.4;
                break;
            case 10: $temp = 20.0;
                break;
            case 11: $temp = 22.6;
                break;
            case 12: $temp = 25.3;
                break;
            case 13: $temp = 28.1;
                break;
            case 14: $temp = 30.9;
                break;
            case 15: $temp = 33.8;
                break;
            case 16: $temp = 36.8;
                break;
            case 17: $temp = 39.8;
                break;
            case 18: $temp = 42.8;
                break;
            case 19: $temp = 46.0;
                break;
            case 20: $temp = 49.1;
                break;
            case 21: $temp = 52.3;
                break;
            case 22: $temp = 55.6;
                break;
            case 23: $temp = 58.9;
                break;
            case 24: $temp = 62.3;
                break;
            case 25: $temp = 65.7;
                break;
            case 26: $temp = 69.1;
                break;
            case 27: $temp = 72.6;
                break;
            case 28: $temp = 76.1;
                break;
            case 29: $temp = 79.6;
                break;
            case 30: $temp = 83.2;
                break;
        }

        $this->quartel = $temp;
    }

    public function setTemplo($temp) {
        switch ($temp) {
            case 1: $temp = 5;
                break;
            case 2: $temp = 10;
                break;
            case 3: $temp = 15;
                break;
            case 4: $temp = 20;
                break;
            case 5: $temp = 25;
                break;
            case 6: $temp = 30;
                break;
            case 7: $temp = 35;
                break;
            case 8: $temp = 40;
                break;
            case 9: $temp = 45;
                break;
            case 10: $temp = 50;
                break;
            case 11: $temp = 55;
                break;
            case 12: $temp = 60;
                break;
            case 13: $temp = 65;
                break;
            case 14: $temp = 70;
                break;
            case 15: $temp = 75;
                break;
            case 16: $temp = 80;
                break;
            case 17: $temp = 85;
                break;
            case 18: $temp = 90;
                break;
            case 19: $temp = 95;
                break;
            case 20: $temp = 100;
                break;
            case 21: $temp = 105;
                break;
            case 22: $temp = 110;
                break;
            case 23: $temp = 115;
                break;
            case 24: $temp = 120;
                break;
            case 25: $temp = 125;
                break;
            case 26: $temp = 130;
                break;
            case 27: $temp = 135;
                break;
            case 28: $temp = 140;
                break;
            case 29: $temp = 145;
                break;
            case 30: $temp = 150;
                break;
        }
        $this->templo = $temp;
    }

    public function setMercado($temp) {
        switch ($temp) {
            case 1: $temp = 2.0;
                break;
            case 2: $temp = 4.3;
                break;
            case 3: $temp = 6.7;
                break;
            case 4: $temp = 9.2;
                break;
            case 5: $temp = 11.7;
                break;
            case 6: $temp = 14.4;
                break;
            case 7: $temp = 17.0;
                break;
            case 8: $temp = 19.7;
                break;
            case 9: $temp = 22.4;
                break;
            case 10: $temp = 25.2;
                break;
            case 11: $temp = 28.0;
                break;
            case 12: $temp = 30.8;
                break;
            case 13: $temp = 33.6;
                break;
            case 14: $temp = 36.5;
                break;
            case 15: $temp = 39.3;
                break;
            case 16: $temp = 42.2;
                break;
            case 17: $temp = 45.1;
                break;
            case 18: $temp = 48.1;
                break;
            case 19: $temp = 51.0;
                break;
            case 20: $temp = 54.0;
                break;
            case 21: $temp = 56.9;
                break;
            case 22: $temp = 59.9;
                break;
            case 23: $temp = 62.9;
                break;
            case 24: $temp = 66.0;
                break;
            case 25: $temp = 69.0;
                break;
            case 26: $temp = 72.0;
                break;
            case 27: $temp = 75.1;
                break;
            case 28: $temp = 78.1;
                break;
            case 29: $temp = 81.2;
                break;
            case 30: $temp = 84.3;
                break;
        }

        $this->mercado = $temp;
    }

    public function setPorto($temp) {
        switch ($temp) {
            case 1: $temp = 4;
                break;
            case 2: $temp = 8;
                break;
            case 3: $temp = 12;
                break;
            case 4: $temp = 16;
                break;
            case 5: $temp = 20;
                break;
            case 6: $temp = 24;
                break;
            case 7: $temp = 28;
                break;
            case 8: $temp = 32;
                break;
            case 9: $temp = 36;
                break;
            case 10: $temp = 40;
                break;
            case 11: $temp = 44;
                break;
            case 12: $temp = 48;
                break;
            case 13: $temp = 52;
                break;
            case 14: $temp = 56;
                break;
            case 15: $temp = 60;
                break;
            case 16: $temp = 64;
                break;
            case 17: $temp = 68;
                break;
            case 18: $temp = 72;
                break;
            case 19: $temp = 76;
                break;
            case 20: $temp = 80;
                break;
            case 21: $temp = 84;
                break;
            case 22: $temp = 88;
                break;
            case 23: $temp = 92;
                break;
            case 24: $temp = 96;
                break;
            case 25: $temp = 100;
                break;
            case 26: $temp = 104;
                break;
            case 27: $temp = 108;
                break;
            case 28: $temp = 112;
                break;
            case 29: $temp = 114;
                break;
            case 30: $temp = 120;
                break;
        }
        $this->porto = $temp;
    }

    public function setAcademia($temp) {
        switch ($temp) {
            case 1: $temp = 3;
                break;
            case 2: $temp = 6;
                break;
            case 3: $temp = 9;
                break;
            case 4: $temp = 12;
                break;
            case 5: $temp = 15;
                break;
            case 6: $temp = 18;
                break;
            case 7: $temp = 21;
                break;
            case 8: $temp = 24;
                break;
            case 9: $temp = 27;
                break;
            case 10: $temp = 30;
                break;
            case 11: $temp = 33;
                break;
            case 12: $temp = 36;
                break;
            case 13: $temp = 39;
                break;
            case 14: $temp = 42;
                break;
            case 15: $temp = 45;
                break;
            case 16: $temp = 48;
                break;
            case 17: $temp = 51;
                break;
            case 18: $temp = 54;
                break;
            case 19: $temp = 57;
                break;
            case 20: $temp = 60;
                break;
            case 21: $temp = 63;
                break;
            case 22: $temp = 66;
                break;
            case 23: $temp = 69;
                break;
            case 24: $temp = 72;
                break;
            case 25: $temp = 75;
                break;
            case 26: $temp = 78;
                break;
            case 27: $temp = 81;
                break;
            case 28: $temp = 84;
                break;
            case 29: $temp = 87;
                break;
            case 30: $temp = 90;
                break;
            case 31: $temp = 93;
                break;
            case 32: $temp = 96;
                break;
            case 33: $temp = 99;
                break;
            case 34: $temp = 102;
                break;
            case 35: $temp = 105;
                break;
            case 36: $temp = 108;
                break;
        }

        $this->academia = $temp;
    }

    public function setMuralha($temp) {
        switch ($temp) {
            case 1: $temp = 2.0;
                break;
            case 2: $temp = 4.5;
                break;
            case 3: $temp = 7.2;
                break;
            case 4: $temp = 10.0;
                break;
            case 5: $temp = 12.9;
                break;
            case 6: $temp = 16.0;
                break;
            case 7: $temp = 19.1;
                break;
            case 8: $temp = 22.3;
                break;
            case 9: $temp = 25.6;
                break;
            case 10: $temp = 28.9;
                break;
            case 11: $temp = 32.3;
                break;
            case 12: $temp = 35.7;
                break;
            case 13: $temp = 39.2;
                break;
            case 14: $temp = 42.7;
                break;
            case 15: $temp = 46.3;
                break;
            case 16: $temp = 49.9;
                break;
            case 17: $temp = 53.5;
                break;
            case 18: $temp = 57.2;
                break;
            case 19: $temp = 60.9;
                break;
            case 20: $temp = 64.6;
                break;
            case 21: $temp = 68.4;
                break;
            case 22: $temp = 72.2;
                break;
            case 23: $temp = 76.0;
                break;
            case 24: $temp = 79.8;
                break;
            case 25: $temp = 83.7;
                break;
        }
        $this->muralha = $temp;
    }

    public function setGruta($temp) {
        switch ($temp) {
            case 1: $temp = 3.0;
                break;
            case 2: $temp = 4.2;
                break;
            case 3: $temp = 5.2;
                break;
            case 4: $temp = 6.0;
                break;
            case 5: $temp = 6.7;
                break;
            case 6: $temp = 7.3;
                break;
            case 7: $temp = 7.9;
                break;
            case 8: $temp = 8.5;
                break;
            case 9: $temp = 9.0;
                break;
            case 10: $temp = 9.5;
                break;
        }
        $this->gruta = $temp;
    }

    public function getResultado() {

        echo $this->muralha + $this->gruta + $this->academia + $this->porto + $this->mercado + $this->templo + $this->quartel + $this->mina + $this->armazem + $this->pedreira + $this->fazenda + $this->serraria + $this->senado + 120;
    }

}

?>