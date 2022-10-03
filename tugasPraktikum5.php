<?php


class lingkaran 
{
    var float $phi=3.14;
    var float $jari_jari;

    function set_jari_jari($jari_jari){
        $this->jari_jari= $jari_jari;
        return round($jari_jari,2);
    }
    function luas()
    {
        $luas=$this->phi* ($this->jari_jari**2);
        return round($luas,2);
    }

    function keliling()
    {
        $keliling= $this->phi*$this->jari_jari*2;
        return round($keliling,2);
    }
}

class thereeange
{
    var float $alas;
    var float $tinggi;

    function set_alas($alas)
    {
        $this->alas= $alas;
        return $alas;
    }

    function set_tinggi($tinggi)
    {
        $this->tinggi= $tinggi;
        return $tinggi;
    }

    function sisimiring()
    {
        $sisi_miring=sqrt(($this->alas**2)+($this->tinggi**2));
        return round($sisi_miring,2);
    }
    

    function luas()
    {
        $luas= 0.5 *$this->alas*$this->tinggi;
        return round($luas,2);
    }

    function keliling()
    {
        $keliling=$this->alas+$this->tinggi +$this->sisimiring();
        return round($keliling,2);
    }
}


$lingkaran=new lingkaran();
$segitiga= new thereeange();
?>
<h2 style="padding: 20px; ;">Praktikum 05 - PHP Objects</h2>
<ol>
    <li >Jika ada lingkaran dengan nilai jari-jari <?php echo $lingkaran->set_jari_jari(13)?>, maka luas-nya adalah <span style ='color:red'> <?php echo $lingkaran->luas(); ?></span> dan keliling-nya adalah<span style ='color:red'> <?php echo $lingkaran->keliling(); ?></span>  </li>
    <li >Jika ada lingkaran dengan nilai jari-jari <?php echo $lingkaran->set_jari_jari(15)?>, maka luas-nya adalah <span style ='color:red'> <?php echo $lingkaran->luas(); ?></span> dan keliling-nya adalah<span style ='color:red'> <?php echo $lingkaran->keliling(); ?></span>  </li>
    <li >Jika ada lingkaran dengan nilai jari-jari <?php echo $lingkaran->set_jari_jari(17)?>, maka luas-nya adalah <span style ='color:red'> <?php echo $lingkaran->luas(); ?></span> dan keliling-nya adalah<span style ='color:red'> <?php echo $lingkaran->keliling(); ?></span>  </li>
    <li >Jika ada segitiga dengan nilai alas <?php echo $segitiga->set_alas(13)?> dan tinggi <?php echo $segitiga->set_tinggi(17)?>, maka luas-nya adalah <span style ='color:red'> <?php echo $segitiga->luas(); ?></span> dan keliling-nya adalah <span style ='color:red'><?php echo $segitiga->sisimiring(); ?></span>  </li>
    <li >Jika ada segitiga dengan nilai alas <?php echo $segitiga->set_alas(15)?> dan tinggi <?php echo $segitiga->set_tinggi(19)?>, maka luas-nya adalah <span style ='color:red'> <?php echo $segitiga->luas(); ?></span> dan kelilingn-ya adalah <span style ='color:red'><?php echo $segitiga->sisimiring(); ?></span>  </li>
</ol>

<footer>
    <center>
        {212410102032} - {Muhammad Zuama Al Amin}
    </center>
</footer>

