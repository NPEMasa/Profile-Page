<?php

class Tax {

    ## 課税所得計算用関数 ##
    # 引数：年収
    public function txincomeCalc($anIncome) {
        $txIncome = 0;
        if($anIncome > 0 && $anIncome <= 1625000){
            $txIncome = $anIncome - 550000;
            return $txIncome;

        }elseif($anIncome > 1625000 && $anIncome <= 1800000){
            $txIncome = round($anIncome * 0.4) - 100000;
            return $txIncome;

        }elseif($anIncome > 1800000 && $anIncome <= 3600000){
            $txIncome = round($anIncome * 0.3) + 80000;
            return $txIncome;

        }elseif($anIncome > 3600000 && $anIncome <= 6600000){
            $txIncome = round($anIncome * 0.2) + 440000;
            return $txIncome;

        }elseif($anIncome > 6600000 && $anIncome <= 8500000){
            $txIncome = round($anIncome * 0.1) + 1100000;
            return $txIncome;

        }else{
            $txIncome = 1950000;
            return $txIncome;

        }
    }

    ## 所得税計算用関数 ##
    # 引数：課税所得金額
    public function incometaxCalc($txIncome) {
        $incomeTax = 0;
        if($txIncome < 1950000){
            $incomeTax = round($txIncome * 0.05);
            return $incomeTax;

        }elseif($txIncome < 3300000 && $txIncome >= 1950000){
            $incomeTax = round($txIncome * 0.1) + 97500;
            return $incomeTax;

        }elseif($txIncome < 6950000 && $txIncome >= 3300000){
            $incomeTax = round($txIncome * 0.2) + 427500;
            return $incomeTax;

        }elseif($txIncome < 9000000 && $txIncome >= 6950000){
            $incomeTax = round($txIncome * 0.23) + 636000;
            return $incomeTax;

        }elseif($txIncome < 18000000 && $txIncome >= 9000000){
            $incomeTax = round($txIncome * 0.33) + 1536000;
            return $incomeTax;

        }elseif($txIncome < 40000000 && $txIncome >= 18000000){
            $incomeTax = round($txIncome * 0.4) + 2796000;
            return $incomeTax;

        }elseif($txIncome >= 40000000){
            $incomeTax = round($txIncome * 0.45) + 4796000;
        }
    }

    ## 住民税計算用関数 ##
    # 引数：前年の課税所得
    # 税率：10％固定
    public function rtxCalc($lytxIncome) {
        $residentTax = round($lytxIncome * 0.1);
        return $residentTax;
    }

    ## 雇用保険計算関数 ##
    # 引数：月額報酬
    # 料率：0.003にて固定
    public function employinsuranceCalc($monthlyReward) {
        $eInsurance = round($monthlyReward * 0.003);
        return $eInsurance;
    }

    ## 健康保険計算関数 ##
    # 引数：月額報酬、年齢
    # 料率：「令和2年9月分からの健康保険・厚生年金保険の保険料額表」を参照
    public function healthinsuranceCalc($monthlyReward, $age) {
        $hInsurance = 0;
        if($monthlyReward < 63000){
            if($age >= 40 && $age < 65){
                $hInsurance = 3381;
            }else{
                $hInsurance = 2862;
            }
        }elseif($monthlyReward >= 63000 && $monthlyReward < 73000){
            if($age >= 40 && $age < 65){
                $hInsurance = 3964;
            }else{
                $hInsurance = 3355;
            }
        }elseif($monthlyReward >= 73000 && $monthlyReward < 83000){
            if($age >= 40 && $age < 65){
                $hInsurance = 4547;
            }else{
                $hInsurance = 3849;
            }
        }elseif($monthlyReward >= 83000 && $monthlyReward < 93000){
            if($age >= 40 && $age < 65){
                $hInsurance = 5130;
            }else{
                $hInsurance = 4342;
            }
        }elseif($monthlyReward >= 93000 && $monthlyReward < 101000){
            if($age >= 40 && $age < 65){
                $hInsurance = 5713;
            }else{
                $hInsurance = 4836;
            }
        }elseif($monthlyReward >= 101000 && $monthlyReward < 107000){
            if($age >= 40 && $age < 65){
                $hInsurance = 6063;
            }else{
                $hInsurance = 5132;
            }
        }elseif($monthlyReward >= 107000 && $monthlyReward < 114000){
            if($age >= 40 && $age < 65){
                $hInsurance = 6413;
            }else{
                $hInsurance = 5428;
            }
        }elseif($monthlyReward >= 114000 && $monthlyReward < 122000){
            if($age >= 40 && $age < 65){
                $hInsurance = 6879;
            }else{
                $hInsurance = 5823;
            }
        }elseif($monthlyReward >= 122000 && $monthlyReward < 130000){
            if($age >= 40 && $age < 65){
                $hInsurance = 7345;
            }else{
                $hInsurance = 6218;
            }
        }elseif($monthlyReward >= 130000 && $monthlyReward < 138000){
            if($age >= 40 && $age < 65){
                $hInsurance = 7812;
            }else{
                $hInsurance = 6612;
            }
        }elseif($monthlyReward >= 138000 && $monthlyReward < 146000){
            if($age >= 40 && $age < 65){
                $hInsurance = 8278;
            }else{
                $hInsurance = 7007;
            }
        }elseif($monthlyReward >= 146000 && $monthlyReward < 155000){
            if($age >= 40 && $age < 65){
                $hInsurance = 8745;
            }else{
                $hInsurance = 7402;
            }
        }elseif($monthlyReward >= 155000 && $monthlyReward < 165000){
            if($age >= 40 && $age < 65){
                $hInsurance = 9328;
            }else{
                $hInsurance = 7896;
            }
        }elseif($monthlyReward >= 165000 && $monthlyReward < 175000){
            if($age >= 40 && $age < 65){
                $hInsurance = 9911;
            }else{
                $hInsurance = 8389;
            }
        }elseif($monthlyReward >= 175000 && $monthlyReward < 185000){
            if($age >= 40 && $age < 65){
                $hInsurance = 10494;
            }else{
                $hInsurance = 8883;
            }
        }elseif($monthlyReward >= 185000 && $monthlyReward < 195000){
            if($age >= 40 && $age < 65){
                $hInsurance = 11077;
            }else{
                $hInsurance = 9376;
            }
        }elseif($monthlyReward >= 195000 && $monthlyReward < 210000){
            if($age >= 40 && $age < 65){
                $hInsurance = 11660;
            }else{
                $hInsurance = 9870;
            }
        }elseif($monthlyReward >= 210000 && $monthlyReward < 230000){
            if($age >= 40 && $age < 65){
                $hInsurance = 12826;
            }else{
                $hInsurance = 10857;
            }
        }elseif($monthlyReward >= 230000 && $monthlyReward < 250000){
            if($age >= 40 && $age < 65){
                $hInsurance = 13992;
            }else{
                $hInsurance = 11844;
            }
        }elseif($monthlyReward >= 250000 && $monthlyReward < 270000){
            if($age >= 40 && $age < 65){
                $hInsurance = 15158;
            }else{
                $hInsurance = 12831;
            }
        }elseif($monthlyReward >= 270000 && $monthlyReward < 290000){
            if($age >= 40 && $age < 65){
                $hInsurance = 16324;
            }else{
                $hInsurance = 13818;
            }
        }elseif($monthlyReward >= 290000 && $monthlyReward < 310000){
            if($age >= 40 && $age < 65){
                $hInsurance = 17490;
            }else{
                $hInsurance = 14805;
            }
        }elseif($monthlyReward >= 310000 && $monthlyReward < 330000){
            if($age >= 40 && $age < 65){
                $hInsurance = 18656;
            }else{
                $hInsurance = 15792;
            }
        }elseif($monthlyReward >= 330000 && $monthlyReward < 350000){
            if($age >= 40 && $age < 65){
                $hInsurance = 19822;
            }else{
                $hInsurance =  16779;
            }
        }elseif($monthlyReward >= 350000 && $monthlyReward < 370000){
            if($age >= 40 && $age < 65){
                $hInsurance = 20988;
            }else{
                $hInsurance = 17766;
            }
        }elseif($monthlyReward >= 370000 && $monthlyReward < 395000){
            if($age >= 40 && $age < 65){
                $hInsurance = 22154;
            }else{
                $hInsurance = 18753;
            }
        }elseif($monthlyReward >= 395000 && $monthlyReward < 425000){
            if($age >= 40 && $age < 65){
                $hInsurance = 23903;
            }else{
                $hInsurance = 20233;
            }
        }elseif($monthlyReward >= 425000 && $monthlyReward < 455000){
            if($age >= 40 && $age < 65){
                $hInsurance = 25652;
            }else{
                $hInsurance = 21714;
            }
        }elseif($monthlyReward >= 455000 && $monthlyReward < 485000){
            if($age >= 40 && $age < 65){
                $hInsurance = 27401;
            }else{
                $hInsurance = 23194;
            }
        }elseif($monthlyReward >= 485000 && $monthlyReward < 515000){
            if($age >= 40 && $age < 65){
                $hInsurance = 29150;
            }else{
                $hInsurance = 24675;
            }
        }elseif($monthlyReward >= 515000 && $monthlyReward < 545000){
            if($age >= 40 && $age < 65){
                $hInsurance = 30899;
            }else{
                $hInsurance = 26155;
            }
        }elseif($monthlyReward >= 545000 && $monthlyReward < 575000){
            if($age >= 40 && $age < 65){
                $hInsurance = 32648;
            }else{
                $hInsurance = 27636;
            }
        }elseif($monthlyReward >= 575000 && $monthlyReward < 605000){
            if($age >= 40 && $age < 65){
                $hInsurance = 34397;
            }else{
                $hInsurance = 29116;
            }
        }elseif($monthlyReward >= 605000 && $monthlyReward < 635000){
            if($age >= 40 && $age < 65){
                $hInsurance = 36146;
            }else{
                $hInsurance = 30597;
            }
        }elseif($monthlyReward >= 635000){
            if($age >= 40 && $age < 65){
                $hInsurance = 37895;
            }else{
                $hInsurance = 32077;
            }
        }
        return $hInsurance;

    }

    ## 厚生年金保険計算関数 ##
    # 引数：月額報酬、年齢
    # 料率：「令和2年9月分からの健康保険・厚生年金保険の保険料額表」を参照
    public function wpinsuranceCalc($monthlyReward) {
        $wpInsurance = 0;
        if($monthlyReward < 93000){
            $wpInsurance = 8052;
        }elseif($monthlyReward >= 93000 && $monthlyReward < 101000){
            $wpInsurance = 8967;
        }elseif($monthlyReward >= 101000 && $monthlyReward < 107000){
            $wpInsurance = 9516;
        }elseif($monthlyReward >= 107000 && $monthlyReward < 114000){
            $wpInsurance = 10065;
        }elseif($monthlyReward >= 114000 && $monthlyReward < 122000){
            $wpInsurance = 10797;
        }elseif($monthlyReward >= 122000 && $monthlyReward < 130000){
            $wpInsurance = 11529;
        }elseif($monthlyReward >= 130000 && $monthlyReward < 138000){
            $wpInsurance = 12261;
        }elseif($monthlyReward >= 138000 && $monthlyReward < 146000){
            $wpInsurance = 12993;
        }elseif($monthlyReward >= 146000 && $monthlyReward < 155000){
            $wpInsurance = 13725;
        }elseif($monthlyReward >= 155000 && $monthlyReward < 165000){
            $wpInsurance = 14640;
        }elseif($monthlyReward >= 165000 && $monthlyReward < 175000){
            $wpInsurance = 15555;
        }elseif($monthlyReward >= 175000 && $monthlyReward < 185000){
            $wpInsurance = 16470;
        }elseif($monthlyReward >= 185000 && $monthlyReward < 195000){
            $wpInsurance = 17385;
        }elseif($monthlyReward >= 195000 && $monthlyReward < 210000){
            $wpInsurance = 18300;
        }elseif($monthlyReward >= 210000 && $monthlyReward < 230000){
            $wpInsurance = 20130;
        }elseif($monthlyReward >= 230000 && $monthlyReward < 250000){
            $wpInsurance = 21960;
        }elseif($monthlyReward >= 250000 && $monthlyReward < 270000){
            $wpInsurance = 23790;
        }elseif($monthlyReward >= 270000 && $monthlyReward < 290000){
            $wpInsurance = 25620;
        }elseif($monthlyReward >= 290000 && $monthlyReward < 310000){
            $wpInsurance = 27450;
        }elseif($monthlyReward >= 310000 && $monthlyReward < 330000){
            $wpInsurance = 29280;
        }elseif($monthlyReward >= 330000 && $monthlyReward < 350000){
            $wpInsurance = 31110;
        }elseif($monthlyReward >= 350000 && $monthlyReward < 370000){
            $wpInsurance = 32940;
        }elseif($monthlyReward >= 370000 && $monthlyReward < 395000){
            $wpInsurance = 34770;
        }elseif($monthlyReward >= 395000 && $monthlyReward < 425000){
            $wpInsurance = 37515;
        }elseif($monthlyReward >= 425000 && $monthlyReward < 455000){
            $wpInsurance = 40260;
        }elseif($monthlyReward >= 455000 && $monthlyReward < 485000){
            $wpInsurance = 43005;
        }elseif($monthlyReward >= 485000 && $monthlyReward < 515000){
            $wpInsurance = 45750;
        }elseif($monthlyReward >= 515000 && $monthlyReward < 545000){
            $wpInsurance = 48495;
        }elseif($monthlyReward >= 545000 && $monthlyReward < 575000){
            $wpInsurance = 51240;
        }elseif($monthlyReward >= 575000 && $monthlyReward < 605000){
            $wpInsurance = 53985;
        }elseif($monthlyReward >= 605000 && $monthlyReward < 635000){
            $wpInsurance = 56730;
        }elseif($monthlyReward >= 635000){
            $wpInsurance = 59475;
        }
        return $hInsurance;
    }
}