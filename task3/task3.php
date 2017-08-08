<html>
    <head>
        <title>Sorting</title>
    </head>
    <body>
        <h1>sorting angka</h1>
        <form action="index.php" method="post">
            <input type="number" name="input1">
            <input type="number" name="input2">
            <input type="number" name="input3">
            <input type="number" name="input4">
            <input type="number" name="input5">
            <input type="number" name="input6">
            <input type="number" name="input7">
            <input type="number" name="input8">
            <input type="number" name="input9">
            <input type="number" name="input10">
            <input type="submit" name="submit" value="sorting">
        </form>
       <?php
        if(isset($_POST['submit']) == "sorting"){
            class data 
            {
                public $data;

                public function setData($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10){
                    $this->data[0] = $n1;
                    $this->data[1] = $n2;
                    $this->data[2] = $n3;
                    $this->data[3] = $n4;
                    $this->data[4] = $n5;
                    $this->data[5] = $n6;
                    $this->data[6] = $n7;
                    $this->data[7] = $n8;
                    $this->data[8] = $n9;
                    $this->data[9] = $n10;
                }
            }

            class sorting extends data
            {
                public function sort($data){
                    $array_size = count($data);
                    for ( $i = 0; $i < $array_size; $i++ )
                    {
                    for ($j = 0; $j < $array_size-1; $j++ )
                    {
                        if ($data[$i] > $data[$j])
                        {
                            $temp = $data[$i];
                            $data[$i] = $data[$j];
                            $data[$j] = $temp;
                        }
                    }
                    }
                    return $data;
                }
                public function tampilHasil(){
                    $hasil = $this->sort($this->data);
                    $n = count($hasil);
                    // print_r($hasil);
                    // echo $hasil[1];
                    for($o=0;$o < $n;$o++){
                    echo $hasil[$o] . " ";
                    }
                }
            }

            $data = new sorting;
            $data->setData($_POST['input1'],$_POST['input2'],$_POST['input3'],$_POST['input4'],$_POST['input5'],$_POST['input6']
                        ,$_POST['input7'],$_POST['input8'],$_POST['input9'],$_POST['input10']);
            // $data->setData(8,2,5);
            echo $data->tampilHasil();
        }


        ?>
    </body>
</html>