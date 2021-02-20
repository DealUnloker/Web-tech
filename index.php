<?php 

function SolveByGaussMethod($matrix){
    $n = count($matrix[0]) - 1;
    $matrix_clone = $matrix;
    for ($i=0; $i < sizeof($matrix); $i++) { 
        array_push($matrix_clone[$i], 0);
    }

    for ($k=0; $k < $n; $k++) { 

        for ($i= 0; $i < $n + 1; $i++) 
            $matrix_clone[$k][$i] /= $matrix[$k][$k];

        for ($i=$k + 1; $i < $n; $i++) { 
            $K = $matrix_clone[$i][$k] / $matrix_clone[$k][$k];
            for ($j=0; $j < $n + 1; $j++)
                $matrix_clone[$i][$j] -= $matrix_clone[$k][$j] * $K;       
        }

        for ($i=0; $i < $n; $i++)
            for ($j=0; $j < $n + 1; $j++) 
                $matrix[$i][$j] = $matrix_clone[$i][$j];

    }

    for ($k= $n - 1; $k > -1 ; $k--) { 

        for ($i=$n; $i > -1 ; $i--) 
            $matrix_clone[$k][$i] /= $matrix[$k][$k];

        for ($i=$k-1; $i > -1 ; $i--) { 
            $K = $matrix_clone[$i][$k] / $matrix_clone[$k][$k];
            for ($j=$n; $j > -1 ; $j--) 
                $matrix_clone[$i][$j] -= $matrix_clone[$k][$j] * $K;
        }

    }

    $result = array();

    for ($i=0; $i < $n; $i++) { 
        array_push($result, $matrix_clone[$i][$n]);
    }

    return $result;
}

function ShowResult($result){
    $i = 1;
    foreach ($result as &$num) {
       echo "<h3>" . "x$i is $num;" . "</h3>";
       $i++;
    }
}



// 2x1 - x2 = 0
// -x1 + x2 + 4x3 = 13
// x1 + 2x2  + 3x3= 14

$matrix = [
    [2, -1, 0, 0],
    [-1, 1, 4, 13],
    [1, 2, 3, 14]
];

$result = SolveByGaussMethod($matrix);
ShowResult($result);

?>