<?php
class AirConditioner {
    /*
    モード(冷房,暖房,除湿 のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替えられる関数を定義すること
    */
    private $mode;
    
    /*
    温度　（18～30）
    */
    private $temperature;
    
    /* 
    風量（1~5）
    */
    private $power;
    
    /*
    コンストラクタ
    */
    function __construct($temperature,$power) {
        
        $this->mode="冷房";
        $this->temperature=$temperature;
        $this->power=$power;
    }
    //初期設定は冷房モードとすること
    //温度・風量は引数で受け取ること
    
    /* 現在設定を表示 */
    function ShowStatus() {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度:$this->temperature\n";
        echo "風量: $this->power\n";
    }
    
    function Heatmode(){
        $this->mode="暖房";
    }

    function coolmode(){
        $this->mode="冷房";
    }
    
    function drymode(){
        $this->mode="除湿";
    }
    
    function temperatureplus(){
        if($this->temperature==30){
            return;
        }
        $this->temperature++;
    }
    
        function temperatureminus(){
        if($this->temperature==18){
            return;
        }
        $this->temperature--;
    }
    
    function powerplus(){
        if($this->power==5){
            $this->power=1;
            return;
        }
        $this->power++;
    }
}
?>