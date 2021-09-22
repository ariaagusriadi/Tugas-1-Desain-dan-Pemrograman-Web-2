 <?php

  class Animal
  {
    public $jumlah_kaki, $bisa_terbang;
  }

  class kucing extends Animal
  {
    function bersuara()
    {
      return "Meongggg";
    }
  }

  class anjing extends Animal
  {
    function bersuara()
    {
      return "Guk Gukk";
    }
  }

  class elang extends Animal
  {
    function bersuara()
    {
      return "Miiippppp";
    }
  }

  class angsa extends Animal
  {
    function bersuara()
    {
      return "Kwaaak";
    }
  }


  // kucing
  $keke = new kucing;
  $keke->jumlah_kaki = 4;
  $keke->bisa_terbang = "Tidak Bisa Terbang";

  echo "Keke Adalah Kucing <br>";
  echo "Punya Kaki Sebanyak: " . $keke->jumlah_kaki . "<br>";
  echo $keke->bisa_terbang . "<br>";
  echo "Suaranya: " . $keke->bersuara() . "<br>";


  echo "<hr>";

  // anjing 
  $koki = new anjing;
  $koki->jumlah_kaki = 4;
  $koki->bisa_terbang = "Tidak Bisa Terbang";

  echo "Koki Adalah anjing <br>";
  echo "Punyi Kaki Sebanyak: " . $koki->jumlah_kaki . "<br>";
  echo $koki->bisa_terbang . "<br>";
  echo "Suaranya: " . $koki->bersuara() . "<br>";


  echo "<hr>";

  // elang 
  $zara = new elang;
  $zara->jumlah_kaki = 2;
  $zara->bisa_terbang = "Bisa Terbang";

  echo "Zara Adalah Elang <br>";
  echo "Punya Kaki Sebanyak: " . $zara->jumlah_kaki . "<br>";
  echo $zara->bisa_terbang . "<br>";
  echo "Suaranya: " . $zara->bersuara() . "<br>";


  echo "<hr>";


  // angsa 
  $ayu = new angsa;
  $ayu->jumlah_kaki = 2;
  $ayu->bisa_terbang = "Bisa Terbang";

  echo "Ayu Adalah Angsa <br>";
  echo "Punya kaki: " . $ayu->jumlah_kaki . "<br>";
  echo $ayu->bisa_terbang . "<br>";
  echo "Suaranya: " . $ayu->bersuara() . "<br>";
